@extends('layouts.app')

@section('content')


<div class="container">
	<h1> Vehicles : </h1>

	<p>
		<div class ="vehicles_table">
			@include('layouts.table')
		</div>
		<div class="links">
			<a href="add">add a vehicle</a>
			<a href="modify">modify a vehicle</a>
			<a href="delete">delete a vehicle</a>
		</div>
	</p>
</div>
