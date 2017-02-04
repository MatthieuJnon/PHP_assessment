<table class ="vehicles-table">
	<tr>
		<td> id </td>
		<td> First Name </td>
		<td> Last Name </td>
		<td> Contact Number </td>
		<td> email </td>
		<td> manufacturer </td>
		<td> type </td>
		<td> year </td>
		<td> colour </td>
		<td> mileage </td>
		<td> created at </td>
		<td> edit </td>
		<td> delete </td>
	</tr>
	@foreach($vehicles as $vehicle)
		<tr>
			@foreach($vehicle->toArray() as $info)
				@if($loop->first)
					<td><a href="{{ url('/vehicles',[$vehicle->id]) }}">{{ $info }}</a></td>
				@elseif($loop->iteration >= 11)
					@continue
				@else
					<td> {{ $info }} </td>
				@endif
			@endforeach
			<td> {{$vehicle->created_at}} </td>
			<td><a href="vehicles/{{$vehicle->id}}/edit"> edit </a> </td>
			<td><a href="{{ url('/vehicles/delete',[$vehicle->id]) }}" > delete </a></td>
	@endforeach

</table>