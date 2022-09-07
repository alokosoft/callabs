<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Time;
use App\User;
use App\Booking;
use App\Prescription;
use App\Mail\AppointmentMail;
use App\Package;
use App\Category;



class FrontEndController extends Controller
{
    public function index(Request $request)
    {
        // Set timezone
        date_default_timezone_set('America/New_York');
        // If there is set date, find the doctors
        if (request('date')) {
            $formatDate = date('m-d-yy', strtotime(request('date')));
            $doctors = Appointment::where('date', $formatDate)->get();
            return view('welcome', compact('doctors', 'formatDate'));
        };
        // Return all doctors avalable for today to the welcome page
        $doctors = Appointment::where('date', date('m-d-yy'))->get();

        //$packages = Package::all();

        $packages = Package::with('ParentTest')->orderBy('created_at', 'desc')->take(6)->get();
        $categories = Category::take(2)->get();
        
        return view('welcome', compact('doctors','packages','categories'));
    }

    public function package(Request $request)
    {
        // Set timezone
        
        return view('package-details');
    }


    public function show($doctorId, $date)
    {
        $appointment = Appointment::where('user_id', $doctorId)->where('date', $date)->first();
        $times = Time::where('appointment_id', $appointment->id)->where('status', 0)->get();
        $user = User::where('id', $doctorId)->first();
        $doctor_id = $doctorId;
        return view('appointment', compact('times', 'date', 'user', 'doctor_id'));
    }

    public function store(Request $request)
    {
        // Set timezone
        date_default_timezone_set('America/New_York');

        $request->validate(['time' => 'required']);
        $check = $this->checkBookingTimeInterval();
        if ($check) {
            return redirect()->back()->with('errMessage', 'You already made an appointment. Please check your email for the appointment!');
        }

        $doctorId = $request->doctorId;
        $time = $request->time;
        $appointmentId = $request->appointmentId;
        $date = $request->date;
        Booking::create([
            'user_id' => auth()->user()->id,
            'doctor_id' => $doctorId,
            'time' => $time,
            'date' => $date,
            'status' => 0
        ]);
        $doctor = User::where('id', $doctorId)->first();
        Time::where('appointment_id', $appointmentId)->where('time', $time)->update(['status' => 1]);

        // Send email notification
        $mailData = [
            'name' => auth()->user()->name,
            'time' => $time,
            'date' => $date,
            'doctorName' => $doctor->name
        ];
        try {
            \Mail::to(auth()->user()->email)->send(new AppointmentMail($mailData));
        } catch (\Exception $e) {
        }

        return redirect()->back()->with('message', 'Your appointment was booked for ' . $date . ' at ' . $time . ' with ' . $doctor->name . '.');
    }

    // check if user already make a booking.
    public function checkBookingTimeInterval()
    {
        return Booking::orderby('id', 'desc')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', date('y-m-d'))
            ->exists();
    }

    public function myBookings()
    {
        $appointments = Booking::latest()->where('user_id', auth()->user()->id)->get();
        return view('booking.index', compact('appointments'));
    }

    public function myPrescription()
    {
        $prescriptions = Prescription::where('user_id', auth()->user()->id)->get();
        return view('my-prescription', compact('prescriptions'));
    }
    public function deleteSessionData(Request $request) {
        $request->session()->forget('cart');
        echo "Data has been removed from session.";
     }

    public function addToCart($id)
    {
        $package = Package::findOrFail($id);

        $lab= \App\Lab::where(['id' => $package->lab_name])->first();
                                 

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $package->package_name,
                "price" => $package->price,
                "lab_name"=>$lab->lab_name,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function cart()
    {
        return view('cart');
    }
    // public function update(Request $request)
    // {
    //     if($request->id && $request->quantity){
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart successfully updated!');
    //     }
    // }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

}
