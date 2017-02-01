@extends('layouts.app')

@section('content')


<div class="container">
	<h1> Vehicles : </h1>

	<p>
		<div class ="vehicles_table">
			<table>
				<tr>
					<td> id</td>
					<td> First Name</td>
					<td> Last Name</td>
					<td> Contact Number</td>
					<td> email</td>
					<td> manufacturer</td>
					<td> type</td>
					<td> year</td>
					<td> colour</td>
					<td> mileage</td>
				</tr>
				@foreach($vehicles as $vehicle)
					@if($vehicle->softDel == 1)
						@continue
					@endif
					<tr>
						@foreach($vehicle as $info)
							@if($loop->iteration == 11)
								@break
							@endif
							<td> {{ $info }} </td>
						@endforeach
					</tr>
				@endforeach

			</table>
		</div>
		<div class="links">
			<a href="add">add a vehicle</a>
			<a href="modify">modify a vehicle</a>
			<a href="delete">delete a vehicle</a>
		</div>
	</p>
</div>
