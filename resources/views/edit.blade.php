@extends('welcome')
@section('content')


<h2 style="text-align: center;">Update Employee Information Using Laravel</h2>

<form method="post" action="{{URL::to('/edit',$info->employee_id)}}" style="text-align: center; font-size: 20px; margin-top: 50px;">

{{csrf_field()}}
<label>Name:</label>
<input type="text" name="name" placeholder="Enter Name" value="{{$info->name}}">

<label>Position</label>
<input type="text" name="position" value="{{$info->position}}">

<label>Salary</label>
<input type="text" name="salary"  value="{{$info->salary}}">

<button type="submit">UPDATE</button>	
</form>
@endsection