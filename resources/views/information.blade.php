@extends('welcome')

@section('content')

<h2 style="text-align: center;">Read All Information From Employee Table Using Laravel</h2>

<?php 
	$message=Session::get('message');

	if($message){
		echo $message;
		Session::put('message',null);
	}

 ?>

 <?php 
	$message_update=Session::get('message_update');

	if($message_update){
		echo $message_update;
		Session::put('message_update',null);
	}

 ?>
<table  width="100%" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td>Employee_id</td>
			<td>Name</td>
			<td>Position</td>
			<td>Salary</td>
		</tr>
	</thead>

	<tbody>
	@foreach($read_info_foreach as $value)
		<tr>
			<td>{{$value->employee_id}}</td>
			<td>{{$value->name}}</td>
			<td>{{$value->position}}</td>
			<td>{{$value->salary}}</td>
			<td><button><a href="{{URL::to('/delete_info/'.$value->employee_id)}}" class="btn btn-success">DELETE</a></button></td>
		    <td><button><a href="{{URL::to('/edit_info/'.$value->employee_id)}}" class="btn btn-success">UPDATE</a></button></td>

		</tr>
	@endforeach
	</tbody>
</table>


@endsection