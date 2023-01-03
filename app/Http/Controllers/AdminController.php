<?php

namespace App\Http\Controllers;
use App\Bus;
use App\Booking;
use App\BusSchedule;
use App\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
        $this->middleware('auth:admin');
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

        return view('admin.admin-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
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

        return view('admin.admin-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
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

        return view('admin.admin-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
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

        return view('admin.admin-dashboard', compact('dalam','luar','book','reg','perKota','perArea','jadwal','jadwalrute','perHari'));
    }

    public function viewwaktu()
    {
        $dateS = Carbon::now()->startOfMonth();
        $dateE = Carbon::now()->endOfMonth();
        $book = DB::table('bookings')->whereBetween('created_at',[$dateS,$dateE])->where('validasi',1)->get();
        // $view = Booking::findOrFail($booking_id);
        // $users = DB::table('v_bus')->select('booking_id','bus_id','bus_name','price','bus_num')->get();

        return view('manager.laporanwaktu',compact('book'));
    }

    public function viewarea()
    {
        $book1 = DB::table('bookings')->whereColumn('source', '=', 'destination')->where('validasi',1)->get();
        $book2 = DB::table('bookings')->whereColumn('source', '!=', 'destination')->where('validasi',1)->get();
        // $view = Booking::findOrFail($booking_id);
        // $users = DB::table('v_bus')->select('booking_id','bus_id','bus_name','price','bus_num')->get();

        return view('manager.laporanarea',compact('book1','book2'));
    }

    public function downloadwaktu(){
        $dateS = Carbon::now()->startOfMonth()->subMonth(1);
        $dateE = Carbon::now()->endOfMonth();
        $book = DB::table('bookings')->whereBetween('created_at',[$dateS,$dateE])->where('validasi',1)->get();
        $data = ['booking' => $book];
        $pdf = PDF::loadView('manager.laporanwaktu', array('book' => $book));
        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('laporanwaktu'.'-'.$todayDate.'.pdf');
    }

    public function downloadarea(){
        $book1 = DB::table('bookings')->whereColumn('source', '=', 'destination')->where('validasi',1)->get();
        $book2 = DB::table('bookings')->whereColumn('source', '!=', 'destination')->where('validasi',1)->get();
        $data = ['booking1' => $book1,'booking2' => $book2];
        $pdf = PDF::loadView('manager.laporanarea', array('book1' => $book1, 'book2' => $book2));
        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('laporanarea'.'-'.$todayDate.'.pdf');
    }
}