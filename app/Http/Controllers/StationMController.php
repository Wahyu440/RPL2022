<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
use App\BusSchedule;
use Session;
use DB;

class StationMController extends Controller
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
        $stations = DB::table('stations')->paginate(10);
        $schedules = BusSchedule::all();
        return view('manager.stations.stations-list', compact('stations', 'schedules'));
    }

    
}