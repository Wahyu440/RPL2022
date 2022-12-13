<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\BusSchedule;
use App\Booking;
use App\Station;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stations = Station::all();
        return view('customer.index', compact('stations'), ['layout' => 'index'], ['cek' => 'customer']);
    }

    public function enquiry(Request $request)
    {
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

        return view('customer.index', compact('stations'), ['schedules' => $schedules, 'layout' => 'schedules', 'buses' => $buses, 'source' => $source, 'dest' => $dest, 'date' => $date]);
    }

    public function showall(Request $request)
    {
        $schedules = DB::table('bus_schedules')->where('sisa_kursi', '>', 0)->Where('status', '=','0')->paginate(10);
        $buses = Bus::get();
        return view('customer.index', ['schedules' => $schedules, 'layout' => 'allSchedules', 'buses' => $buses]);
    }

    public function institusi(Request $request)
    {
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
            ->Where('status', '=','1')
            ->paginate(10);

        return view('customer.index', compact('stations'), ['schedules' => $schedules, 'layout' => 'institusi', 'buses' => $buses, 'source' => $source, 'dest' => $dest, 'date' => $date]);
    }
}