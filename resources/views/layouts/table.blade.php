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
		<td> delete </td>
	</tr>
	@foreach($vehicles as $vehicle)
		<tr>
			@foreach($vehicle->toArray() as $info)
				@if($loop->first)
					<td><a href="{{ url('/vehicles/{$info}') }}">{{ $info }}</a></td>
				@elseif($loop->iteration >= 11)
					@continue
				@else
					<td> {{ $info }} </td>
				@endif
			@endforeach
			<td><a href="{{ url('/vehicles/{$info}') }}" > delete </a></td>
	@endforeach

</table>