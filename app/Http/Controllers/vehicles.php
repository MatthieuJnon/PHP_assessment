<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class vehicles extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$vehicles = DB::select('select * from vehicles');
        return view('vehicles', compact('vehicles'));
    }

    public function add()
    {
    	$vehicles = DB::select('select * from vehicles');
        return view('add', compact('vehicles'));
    }

    public function modify()
    {
    	$vehicles = DB::select('select * from vehicles');
        return view('modify', compact('vehicles'));
    }

    public function delete()
    {
    	$vehicles = DB::select('select * from vehicles');
        return view('delete', compact('vehicles'));
    }
}
