@extends('layouts.app')

@section('content')


<div class="container">
	<h1>Add a vehicle</h1>

	<p>
		<div>
			<div class="form_block">

				<form method="POST" action="{{ url('/vehicles') }}">

				{{ csrf_field() }}


				<h2>Owner:</h2>
					<label for='first_name'> First name:</label>
					<input type='text' name='first_name' id='first_name' required/><br/>

					<label for='last_name'>Last name:</label>
					<input type='text' name ='last_name' id='last_name' required/><br/>

					<label for='contact_number'>contact number:</label>
					<input type='tel' name ='contact_number' id='contact_number' /><br/>

					<label for='email'>email:</label>
					<input type='email' name ='email' id='email' required/><br/>


				<h2>Vehicle:</h2>

					<label for='manufacturer'>Manufacturer:</label>
					<input type='text' name ='manufacturer' id='manufacturer' required/><br/>

					<label for='type'>Type of car:</label>
					<input type='text' name ='type' id='type' /><br/>

					<label for='year'>Year:</label>
					<input type='number' name ='year' id='year' min="1850" max="2030" required/><br/>

					<label for='colour'>Colour:</label>
					<input type='text' name ='colour' id='colour' /><br/>

					<label for='mileage'>Mileage:</label>
					<input type='number' name ='mileage' id='mileage' min="0" max ="999999" required/><br/>

					

					<button type='submit' class='button-primary'> Submit </button>


				</form>
				@include('layouts.form_errors')
			
			</div>
		</div>
		@include('layouts.vehicles_links')
	</p>
</div>

@endsection
