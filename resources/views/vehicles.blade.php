@extends('layouts.app')

@section('content')


<div class="container">
	<h1> Vehicles : </h1>

	<p>
		<div>
			@include('layouts.table')
		</div>
		<div class="links">
			<a href="add">add a vehicle <br></a>
			<a href="modify">modify a vehicle<br></a>
			<a href="delete">delete a vehicle<br></a>
		</div>
	</p>
</div>

@endsection