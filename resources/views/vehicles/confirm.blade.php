@extends('layouts.app')

@section('content')


<div class="container">
	<h2> Do you really want to delete vehicle {{$vehicle->id}}? </h2>

		<div>
			<div class="confirmation">
				<a class ="confirmation" href="{{ url('/vehicles/delete',[$vehicle->id]) }}" > Yes </a>
			</div>
			<div class="confirmation">
				<a class="confirmation" href="{{ url('/vehicles') }}" > No </a>
			</div>
		</div>

</div>

@endsection