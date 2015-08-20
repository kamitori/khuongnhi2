@foreach($list_so as $so)
	<tr>
		<td  class="center" >{{ date('d-m-Y',strtotime($so['date'])) }}</td>
		<td  class="center" >{{ $so['id'] }}</td>
		<td  class="center" >{{ $so['company_name'] }}</td>
		<td  class="center" >{{ $so['oum_name'] }}</td>
		<td  class="center" >{{ $so['specification'] }}</td>
		<td  class="center" >{{ $so['quantity'] }}</td>
	</tr>
@endforeach