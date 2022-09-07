<?php

use Illuminate\Support\Facades\Route;

// Home Page Routes
Route::get('/', 'FrontEndController@index');
Route::get('/new-appointment/{doctorId}/{date}', 'FrontEndController@show')->name('create.appointment');

Route::get('/dashboard', 'DashBoardController@index');

Route::get('/home', 'HomeController@index');
Route::get('/frontend-login', 'FrontendLogInController@index');
Route::get('/frontend-signup','FrontendLogInController@signup');

Route::get('/package', 'FrontEndController@package');

Route::get('add-to-cart/{id}', 'FrontEndController@addToCart')->name('add_to_cart');
Route::get('cart', 'FrontEndController@cart')->name('cart');

Route::get('session/remove','FrontEndController@deleteSessionData')->name('session');
Route::delete('remove-from-cart', 'FrontEndController@remove')->name('remove_from_cart');

Auth::routes();

// Patient Routes
Route::group(['middleware' => ['auth', 'patient']], function () {
    // Profile Routes
    Route::get('/user-profile', 'ProfileController@index')->name('profile');
    Route::post('/user-profile', 'ProfileController@store')->name('profile.store');
    Route::post('/profile-pic', 'ProfileController@profilePic')->name('profile.pic');

    Route::post('/book/appointment', 'FrontEndController@store')->name('book.appointment');
    Route::get('/my-booking', 'FrontEndController@myBookings')->name('my.booking');
    Route::get('/my-prescription', 'FrontEndController@myPrescription')->name('my.prescription');
});
// Admin Routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('doctor', 'DoctorController');
    Route::get('/patients', 'PatientListController@index')->name('patients');
    Route::get('/status/update/{id}', 'PatientListController@toggleStatus')->name('update.status');
    Route::get('/all-patients', 'PatientListController@allTimeAppointment')->name('all.appointments');
    Route::resource('/department', 'DepartmentController');
    Route::get('/test', 'TestController@create')->name('test.create');
    Route::post('/test-store', 'TestController@store')->name('test.store');
    Route::get('/category', 'CategoryController@index')->name('category.create');
    Route::post('/category-store', 'CategoryController@store')->name('category.store');
    Route::get('/lab', 'LabController@index')->name('lab.create');
    Route::post('/lab-store', 'LabController@store')->name('lab.store');
    Route::get('/all-labs', 'LabController@show')->name('lab.show');
   
    Route::get('/sub-test', 'TestController@subtest')->name('subtest.create');
    Route::post('/sub-test-store', 'TestController@subteststore')->name('subtest.store');
    Route::get('/sub-test-show', 'TestController@subtestshow')->name('subtest.show');
   
    Route::get('/parent-test', 'TestController@parenttest')->name('parenttest.create');
    Route::post('/parent-test-store', 'TestController@parentteststore')->name('parenttest.store');
   

});
// Doctor Routes
Route::group(['middleware' => ['auth', 'doctor']], function () {
    Route::resource('appointment', 'AppointmentController');
    Route::post('/appointment/check', 'AppointmentController@check')->name('appointment.check');
    Route::post('/appointment/update', 'AppointmentController@updateTime')->name('update');
    Route::get('patient-today', 'PrescriptionController@index')->name('patient.today');
    Route::post('prescription', 'PrescriptionController@store')->name('prescription');
    Route::get('/prescription/{userId}/{date}', 'PrescriptionController@show')->name('prescription.show');
    Route::get('/all-prescriptions', 'PrescriptionController@showAllPrescriptions')->name('all.prescriptions');
});
