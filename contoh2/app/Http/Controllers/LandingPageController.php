<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\BusSchedule;
use App\Booking;
use App\Station;
use DB;
use Auth;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buses = Bus::all();
        return view('admin.admin-dashboard', compact('buses'));
    }
}