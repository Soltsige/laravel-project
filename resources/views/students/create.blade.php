@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Addition</div>
  <div class="card-body">
      
      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>Fname</label></br>
        <input type="text" name="Fname" id="Fname" class="form-control"></br>
        <label>Lname</label></br>
        <input type="text" name="Lname" id="Lname" class="form-control"></br>
        <label>User</label></br>
        <input type="text" name="User" id="User" class="form-control"></br>
        <label>Email</label></br>
        <input type="Email" name="Email" id="Email" class="form-control"></br>
        <label>Department </label></br>
        <input type="text" name="Department" id="Department" class="form-control"></br>
        <label>Year</label></br>
        <input type="number" name="Year" id="Year" class="form-control">
        <input type="submit" value="Save" class="btn btn-success">
    </form>
   
  </div>
</div>
 
@stop