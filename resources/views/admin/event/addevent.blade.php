@extends('layouts.admin')


@section('title')
 Navigatu Add Event
@endsection


@section('content')



@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<Center>
    <h3 class="text-success"><strong>Add Event</strong></h3>
    </Center>
<div class="container-lx">
    
  

    <a href="/eventss" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"> </i>Back</a>
    <br>
    <br>
    <div class="row">

  <div class="col-12">

    <div class="card">
       
        <div class="card-body">
<form action="/addevents" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
        <br>
        <br>
      

            <div class="form-group">
        <label>Event Type</label>
        <select name="eventtype" class="form-control">
        <option value="pitching">Pitching</option>
        <option value="training">Training</option>
        <option value="workshop">Workshop</option>
        <option value="meeting">Meeting</option>
        <option value="benchmark">Benchmark</option>
        <option value="etc">etc</option>
        </select>
    </div>
    <label>Title</label></br>
    <input type="text" name="title" id="title" class="form-control" required></br>
    <label>Description</label></br>
    <textarea type="text" name="description" id="description" class="form-control" ></textarea></br>
    <label>From Date</label></br>
    <input type="date" name="date" id="date" class="form-control" required></br>
    <label>To Date</label><br>
    <input type="date" name="toDate" id="toDate" class="form-control" required><br>
    <label>Venue</label></br>
    <input type="text" name="session" id="session" class="form-control" ></br>
    <label>Host Organization</label></br>
    <input type="text" name="host" id="host" class="form-control"></br>
    <label>Partners</label></br>
    <input type="text" name="partner" id="partner" class="form-control"></br>
    <label>Speakers</label></br>
    <input type="text" name="speaker" id="speaker" class="form-control" ></br>
    <label>Evaluators</label></br>
    <input type="text" name="evaluator" id="evaluator" class="form-control" ></br>
    <label>Budget</label></br>
    <input type="text" name="budget" id="budget" class="form-control"></br>
    <label>Document</label></br>
    <input type="file" name="document[]" id="document" class="form-control" multiple ></br>
    <input type="submit" value="Save" onclick="return confirm('Event Has Been Created')" class="btn btn-success">
<br>
<br>
<br>
<br>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection


@section('scripts')

@endsection