<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Bus;
use Session;
use DB;

class BusMController extends Controller
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
        $buses = Bus::orderBy('created_at', 'asc')->paginate(5);
        return view('manager.buses.bus-list', compact('buses'));
    }
}