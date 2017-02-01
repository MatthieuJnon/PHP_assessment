@extends('layouts.app')

@section('content')


<div class="container">
	<h1> Vehicles : </h1>

	<p>
		<div>
			@include('layouts.table')
		</div>
		@include('layouts.vehicles_links')
	</p>
</div>

@endsection