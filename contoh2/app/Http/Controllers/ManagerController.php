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
    public function index()
    {
        //BUS
        $buses = Bus::all();
        $available = $buses->where('status', 1);
        $notAvailable = $buses->where('status', 0);

        //Pemesanan
        $book = Booking::all();
        
        // for()
        $perKota = $book->where('source', ['Station']);

        //Region
        $reg   = Station::all();

        return view('manager.manager-dashboard', compact('available','notAvailable','book','reg','perKota'));
    }
}