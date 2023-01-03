    <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LandingPageController@index');
Route::post('/enquiry', 'LandingPageController@enquiry');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('home')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/enquiry', 'HomeController@enquiry')->name('enquiry');
    Route::get('/enquiry', 'HomeController@showall')->name('schedules.all');


    Route::get('/booking', 'BookingController@index')->name('booking.index');
    Route::get('/booking/{schedule_id}', 'BookingController@create')->name('ticket.booking');
    Route::post('/booking/{schedule_id}', 'BookingController@store')->name('ticket.booking.submit');
    Route::get('/booking/{booking_id}/edit', 'BookingController@edit')->name('booking.edit');
    Route::post('/booking/{booking_id}/update', 'BookingController@update')->name('booking.update');
    Route::get('/booking/{booking_id}/delete', 'BookingController@destroy')->name('booking.delete');
    Route::get('/booking/{booking_id}/view', 'BookingController@viewinvoice');
    Route::get('/booking/{booking_id}/download', 'BookingController@downloadinvoice');
    Route::get('/booking/{booking_id}/upload', 'BookingController@upload');
    Route::get('/booking/{booking_id}/upload/{url}', 'BookingController@postupload');

    Route::get('booking/success/{booking_id}', 'BookingController@success')->name('success');
    Route::get('booking/failed/{booking_id}', 'BookingController@failure')->name('failure');

});

Route::get('/home/institusi', 'HomeController@institusi')->name('institusi');
Route::get('/home/booking/institusi/{schedule_id}', 'BookingController@createInstitusi')->name('ticket.booking');
Route::post('/home/booking/institusi/{schedule_id}', 'BookingController@storeInstitusi')->name('ticket.booking.submit');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Station Route
    Route::Resource('station', 'StationController');
    // Bus Route
    Route::Resource('bus', 'BusController');
    // Route BusSchedule
    Route::Resource('bus-schedule', 'BusScheduleController');
    // Route Booking
    Route::Resource('order', 'OrderController');
    Route::get('/booking/{booking_id}/view', 'OrderController@viewinvoice');
    Route::get('/validasi/{booking_id}', 'OrderController@validasi');

    // Route::get('/showRegion', ['as'=>'showRegion', 'uses'=>'BusScheduleController@showRegion']);
    // Route::get('/showOperator', ['as'=>'showOperator', 'uses'=>'BusScheduleController@showOperator']);

    // Password REset RoutEs  
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('/password/reset/{{ token }}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::post('/enquiry', 'AdminController@enquiry')->name('admin.dashboard');
    Route::post('/harian', 'AdminController@harian')->name('admin.dashboard');
    Route::post('/institusi', 'AdminController@institusi')->name('admin.dashboard');

    Route::get('/viewwaktu', 'AdminController@viewwaktu');
    Route::get('/viewarea', 'AdminController@viewarea');
    Route::get('/downloadwaktu', 'AdminController@downloadwaktu');
    Route::get('/downloadarea', 'AdminController@downloadarea');
});

Route::prefix('manager')->group(function(){
    Route::get('/login', 'Auth\ManagerLoginController@showLoginForm')->name('manager.login');
    Route::post('/login', 'Auth\ManagerLoginController@login')->name('manager.login.submit');
    Route::get('/', 'ManagerController@index')->name('manager.dashboard');
    Route::get('/logout', 'Auth\ManagerLoginController@logout')->name('manager.logout');

    // Station Route
    Route::Resource('stationManager', 'StationMController');
    // Bus Route
    Route::Resource('busManager', 'BusMController');
    // Route BusSchedule
    Route::Resource('bus-scheduleManager', 'BusScheduleMController');

    Route::post('/enquiry', 'ManagerController@enquiry')->name('manager.dashboard');
    Route::post('/harian', 'ManagerController@harian')->name('manager.dashboard');
    Route::post('/institusi', 'ManagerController@institusi')->name('manager.dashboard');
});