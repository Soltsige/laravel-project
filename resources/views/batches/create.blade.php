@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course name</label></br>
        <input type="text" name="course_id" id="course_id" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"> 
    </form>
   
  </div>
</div>
 
@stop