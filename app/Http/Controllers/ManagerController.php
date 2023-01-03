<?php

namespace App\Http\Controllers;
use App\Bus;
use App\Booking;
use App\BusSchedule;
use App\Station;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
        $this->middleware('auth:manager');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $rute = $request->rute;
        $harian = $request->harian;
        $area = $request->area;
        //BUS
        $jadwal = BusSchedule::all();
        // $hari = BusSchedule::where('created_at', '=', $harian);
        $jadwalrute = BusSchedule::where('schedule_id', '=', $rute);
        $dalam = BusSchedule::whereColumn('pickup_address', '=', 'dropoff_address');
        $luar = BusSchedule::whereColumn('pickup_address', '!=', 'dropoff_address');


        //Pemesanan
        $book = Booking::all();
        
        // $perKotaDash = DB::table('BusSchedule')
        //          ->select('schedule_id', DB::raw('count(*) as total'))
        //          ->groupBy('source')
        //          ->get();

       
        $perKota =  Booking::where('schedule_id', $rute);
        $perHari =  Booking::whereDate('created_at', $harian);
        $perArea =  Booking::where('source', $area)->where('status',1);
        
        
        // for()
        // $perKota = Booking::where('schedule_id', ['Booking']);

        //Region
        $reg   = Station::all();

        return view('manager.manager-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
    }

    public function enquiry(Request $request)
    {
        $rute = $request->rute;
        $harian = $request->harian;
        $area = $request->area;
        //BUS
        $jadwal = BusSchedule::all();
        // $hari = BusSchedule::where('created_at', '=', $harian);
        $jadwalrute = BusSchedule::where('schedule_id', '=', $rute);
        $dalam = BusSchedule::whereColumn('pickup_address', '=', 'dropoff_address');
        $luar = BusSchedule::whereColumn('pickup_address', '!=', 'dropoff_address');


        //Pemesanan
        $book = Booking::all();
        
        // $perKotaDash = DB::table('BusSchedule')
        //          ->select('schedule_id', DB::raw('count(*) as total'))
        //          ->groupBy('source')
        //          ->get();

       
        $perKota =  Booking::where('schedule_id', $rute);
        $perHari =  Booking::whereDate('created_at', $harian);
        $perArea =  Booking::where('source', $area)->where('status',1);
        
        
        // for()
        // $perKota = Booking::where('schedule_id', ['Booking']);

        //Region
        $reg   = Station::all();

        return view('manager.manager-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
    }

    public function harian(Request $request)
    {
        $rute = $request->rute;
        $harian = $request->harian;
        $area = $request->area;
        //BUS
        $jadwal = BusSchedule::all();
        // $hari = BusSchedule::where('created_at', '=', $harian);
        $jadwalrute = BusSchedule::where('schedule_id', '=', $rute);
        $dalam = BusSchedule::whereColumn('pickup_address', '=', 'dropoff_address');
        $luar = BusSchedule::whereColumn('pickup_address', '!=', 'dropoff_address');


        //Pemesanan
        $book = Booking::all();
        
        // $perKotaDash = DB::table('BusSchedule')
        //          ->select('schedule_id', DB::raw('count(*) as total'))
        //          ->groupBy('source')
        //          ->get();

       
        $perKota =  Booking::where('schedule_id', $rute);
        $perHari =  Booking::whereDate('created_at', $harian);
        $perArea =  Booking::where('source', $area)->where('status',1);
        
        
        // for()
        // $perKota = Booking::where('schedule_id', ['Booking']);

        //Region
        $reg   = Station::all();

        return view('manager.manager-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
    }

    public function institusi(Request $request)
    {
        $rute = $request->rute;
        $harian = $request->harian;
        $area = $request->area;
        //BUS
        $jadwal = BusSchedule::all();
        // $hari = BusSchedule::where('created_at', '=', $harian);
        $jadwalrute = BusSchedule::where('schedule_id', '=', $rute);
        $dalam = BusSchedule::whereColumn('pickup_address', '=', 'dropoff_address');
        $luar = BusSchedule::whereColumn('pickup_address', '!=', 'dropoff_address');


        //Pemesanan
        $book = Booking::all();
        
        // $perKotaDash = DB::table('BusSchedule')
        //          ->select('schedule_id', DB::raw('count(*) as total'))
        //          ->groupBy('source')
        //          ->get();

       
        $perKota =  Booking::where('schedule_id', $rute);
        $perHari =  Booking::whereDate('created_at', $harian);
        $perArea =  Booking::where('source', $area)->where('status',1);
        
        
        // for()
        // $perKota = Booking::where('schedule_id', ['Booking']);

        //Region
        $reg   = Station::all();

        return view('manager.manager-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
    }
}