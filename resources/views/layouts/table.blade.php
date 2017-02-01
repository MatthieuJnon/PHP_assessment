<table class ="vehicles-table">
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
		@if($vehicle->soft_del == 1)
			@continue
		@endif
		<tr>
			@foreach($vehicle as $info)
				@if($loop->iteration >= 11)
					@break
				@endif
				<td> {{ $info }} </td>
			@endforeach
		</tr>
	@endforeach

</table>