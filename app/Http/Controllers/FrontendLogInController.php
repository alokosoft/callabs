<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class FrontendLogInController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        // redirect to dashboard if user is admin or doctor
          
        return view('layouts.frontend.login');
    }
    public function signup()
    {
        // redirect to dashboard if user is admin or doctor
          
        return view('layouts.frontend.signup');
    }
}
