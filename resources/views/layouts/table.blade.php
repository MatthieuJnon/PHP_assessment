<table class ="vehicles-table">
	<tr>
		<td> id </td>
		<td> Owner name</td>
		<td> manufacturer </td>
		<td> type </td>
		<td> created at </td>
		<td> edit </td>
		<td> delete </td>
	</tr>
	@foreach($vehicles as $vehicle)
		<tr>
			<td><a href="{{ url('/vehicles',[$vehicle->id]) }}">{{$vehicle->id}}</a></td>
			<td> {{ $vehicle->first_name }} {{$vehicle->last_name}} </td>
			<td> {{$vehicle->manufacturer}} </td>
			<td> {{$vehicle->type}} </td>
			<td> {{$vehicle->created_at}} </td>
			<td><a href="vehicles/{{$vehicle->id}}/edit"> edit </a> </td>
			<td><a href="{{ url('/vehicles/confirm',[$vehicle->id]) }}" > delete </a></td>
	@endforeach

</table>