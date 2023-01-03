<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\BusSchedule;
use App\Bus;
use App\Station;
use App\User;
use Session;
use DB;
use Illuminate\Support\Carbon;
use PDF;
use App\Mail\BussLightyearEmail;
// use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $order = DB::table('bookings')->whereNotNull('bukti')->where('validasi',0)->get();
        $buses = Bus::all();
        return view('admin.bookings.booking-list', ['booking' => $order, 'buses' => $buses]);
    }

    public function viewinvoice(int $booking_id)
    {
        $booking = Booking::find($booking_id);
        $busschedule = BusSchedule::find($booking->schedule_id);
        $bus = Bus::find($booking->bus_id);
        $user = User::find($booking->customer_id);
        // $view = Booking::findOrFail($booking_id);
        // $users = DB::table('v_bus')->select('booking_id','bus_id','bus_name','price','bus_num')->get();

        return view('admin.bookings.invoice',compact('booking', 'busschedule', 'bus', 'user'));
    }

    public function validasi(int $booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->validasi = 1;
        $booking->save();
        $busschedule = BusSchedule::find($booking->schedule_id);
        $bus = Bus::find($booking->bus_id);
        $user = User::find($booking->customer_id);
        $data = PDF::loadView('admin.bookings.validation',compact('booking', 'busschedule', 'bus', 'user'));
        $email = new BussLightyearEmail();
        $email->attachData($data->output(),"Tiket.pdf");
        Mail::to($user->email)->send($email);
        return redirect('/admin/order');
    }
}