<?php

namespace App\Http\Controllers;

use \App\vehicle;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class vehicles extends Controller
{

	protected $request;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
    	$this->request = $request;
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

    // public function show(vehicle $vehicle)
    // {

    // 	return view('vehicle.show', compact('vehicle'));
    
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$vehicles = vehicle::all();
        return view('vehicles.create', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    	//validation :
    	$this->validate(request(), [

    		'first_name' => 'required|string|max:100',
    		'last_name' => 'required|string|max:100',
    		'contact_number' => 'required|between:4,25',
    		'email' => 'required|e-mail',
    		'manufacturer' => 'required|string|max:100',
    		'type' => 'required|string|max:100',
    		'year' => 'required|between:1850,2030|numeric',
    		'colour' => 'required|string|max:50',
    		'mileage' => 'required'

    	]);

    	vehicle::create(request(['first_name','last_name','contact_number','email', 'manufacturer', 'type', 'year', 'colour', 'mileage']));

    	//redirection :
    	return redirect('vehicles');
    }


    public function edit($id)
    {
    	$vehicle = vehicle::find($id);
    	return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation :
    	$this->validate(request(), [

    		'first_name' => 'required|string|max:100',
    		'last_name' => 'required|string|max:100',
    		'contact_number' => 'required|between:4,25',
    		'email' => 'required|e-mail',
    		'manufacturer' => 'required|string|max:100',
    		'type' => 'required|string|max:100',
    		'year' => 'required|between:1850,2030|numeric',
    		'colour' => 'required|string|max:50',
    		'mileage' => 'required'

    	]);

    	$vehicle = vehicle::find($id);
    	$input = $this->request->all();
    	$vehicle->update($input);
    	return redirect('vehicles');

    }


    /**
     * Soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

    	$vehicle = vehicle::find($id);
    	$vehicle->delete();

    	return redirect('vehicles');

    }
}
