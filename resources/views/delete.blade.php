@extends('layouts.app')

@section('content')


<div class="container">
	<h1> Vehicles : </h1>

	<p>
		<div class ="vehicles_table">
			@include('layouts.table')
		</div>
		<div class="form_block">
			<form>
				<label for='deleteNo'> Choose the number of the vehicle you wish to delete :</label>
				<input type='text' name='deleteNo' id='deleteNo' />

				<button type='submit' class='button-primary'> Submit</button>


			</form>
		</div>
	</p>
</div>

@endsection