<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusSchedule;
use App\Bus;
use App\Station;
use Session;

class BusScheduleMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth:manager');
    }
    
    public function index()
    {
        $schedules = BusSchedule::orderBy('created_at', 'asc')->paginate(5);
        $buses = Bus::all();
        $stations = Station::all();
        return view('manager.schedules.schedule-list', compact('schedules', 'buses', 'stations'));
    }
}