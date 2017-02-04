@extends('layouts.app')

@section('content')

<div class="container">
	<h1> {{ $vehicle->first_name}}'s vehicle: </h1>

	<h2> Owner : </h2>
	<p> 
	<strong>First name:</strong>   {{ $vehicle->first_name }} <br/>
	<strong>Last name:</strong>   {{ $vehicle->last_name }} <br/>
	<strong>Contact number:</strong>   {{ $vehicle->contact_number }} <br/>
	<strong>e-mail: </strong>   {{ $vehicle->email }} <br/>

	<h2> Vehicle details: </h2>

	<strong>Manufacturer:</strong>   {{ $vehicle->manufacturer }} <br/>
	<strong>Type of car:</strong> {{ $vehicle->type }} <br/>
	<strong>Year:</strong>   {{ $vehicle->year }} <br/>
	<strong>Colour:</strong>   {{ $vehicle->colour }} <br/>
	<strong>Mileage:</strong>   {{ $vehicle->mileage }} <br/>

	</p>

	<div class="links">
		<a href="{{ url('/vehicles') }}">Go back to the list<br/></a>
	</div>

</div>

@endsection