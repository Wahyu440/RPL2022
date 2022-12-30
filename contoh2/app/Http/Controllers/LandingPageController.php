<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\BusSchedule;
use App\Booking;
use App\Station;
use DB;
use Auth;
use Stevebauman\Location\Facades\Location;

class LandingPageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $ip = $request->ip();
        /*Dynamic IP address */
        $ip = '36.75.182.0';
        /* Static IP address */
        $currentUserInfo = Location::get('https://'.$ip);

        $source = ucfirst($request->source);
        $dest = ucfirst($request->destination);
        $date = $request->travel_date;

        $buses = Bus::all();
        $stations = Station::all();
        $schedules = DB::table('bus_schedules')->Where('status', '=','0')->where('sisa_kursi', '>', 0)->paginate(10);
        return view('welcome',compact('stations','currentUserInfo'),['schedules' => $schedules, 'layout' => 'schedules', 'buses' => $buses, 'source' => $source, 'dest' => $dest, 'date' => $date]);
    }

    public function enquiry(Request $request)
    {
        $ip = $request->ip();
        /*Dynamic IP address */
        $ip = '36.75.182.0';
        /* Static IP address */
        $currentUserInfo = Location::get('https://'.$ip);

        $source = ucfirst($request->source);
        $dest = ucfirst($request->destination);
        $date = $request->travel_date;

        $buses = Bus::all();
        $stations = Station::all();

        $schedules = DB::table('bus_schedules')
            ->Where('pickup_address', $source)
            ->Where('depart_date', '=', $date)
            // ->orWhere('source', 'like', '%' . Input::get('source') . '%')
            ->Where('dropoff_address', $dest)
            ->Where('status', '=','0')
            ->where('sisa_kursi', '>', 0)
            ->paginate(10);

        return view('welcome', compact('stations','currentUserInfo'), ['schedules' => $schedules, 'layout' => 'schedules', 'buses' => $buses, 'source' => $source, 'dest' => $dest, 'date' => $date]);
    }
}