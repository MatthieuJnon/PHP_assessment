@extends('layouts.app')

@section('content')


<div class="container">
	<h1> Vehicles : </h1>

	<p>
		<div class ="vehicles_table">
			@include('layouts.table')
		</div>
		<div class="form_block">
			<form method="post" action="/vehicle">
				<label for='deleteNo'> Choose the number of the vehicle you wish to delete :</label>
				<input type='text' name='deleteNo' id='deleteNo' />

				{{ csrf_field() }}

				<button type='submit' class='button-primary'> Submit</button>


			</form>
			
		</div>
		@include('layouts.vehicles_links')
	</p>
</div>

@endsection