@extends('layouts.app')

@section('content')


<div class="container">
	<h1> Vehicles : </h1>

	<p>clicl on the id of a vehicle to view it.</p>

	<p>
		<div>
			@include('layouts.table')
		</div>
		@include('layouts.vehicles_links')
	</p>
</div>

@endsection