<?php

namespace App\Http\Controllers;

use \App\vehicle;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

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
    	$vehicles = vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    // public function show($id)
    // {
    // 	$vehicle = vehicle::find($id);

    // 	return view('vehicle.show')
    // }

    public function add()
    {
    	$vehicles = vehicle::all();
        return view('vehicles.add', compact('vehicles'));
    }

    public function modify()
    {
    	$vehicles = vehicle::all();
        return view('vehicles.modify', compact('vehicles'));
    }

    public function delete()
    {
    	$vehicles = vehicle::all();
        return view('vehicles.delete', compact('vehicles'));
    }

    public function destroy($id){



    	$vehicles = vehicle::all();
        return view('vehicles', compact('vehicles'));
    }
}
