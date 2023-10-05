@extends('layouts.example')


@section('title')
 Navigatu
@endsection


@section('content')
@inject('events', 'App\Models\Event')   


@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-12">

<form action="/addedpart" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
        <br>
        <br>
    <input type="hidden" name="events_id"  value="{{ request('events_id') }}">
   
    <label>Full Name </label></br>
    <input type="text" name="startupname" id="startupname" class="form-control" required></br>
    <label>Course And Year</label></br>
    <input type="text" name="problem" id="problem" class="form-control" required></br>
    <label>Email</label></br>
    <input type="text" name="solution" id="solution" class="form-control"required></br>
    <label>Contact</label></br>
    <input type="text" name="target" id="target" class="form-control" required></br>
 
    
    <label>Upload Pitch Deck & other Document</label></br>
    <input type="file" name="documents" id="documents" class="form-control" ></br>
    <input type="submit" value="Save" onclick="return confirm('Register?')" class="btn btn-success">
    <a href="/studenteve" class="btn btn-danger">Cancel</a>
    </br>
    
</form>
</div>
</div>
</div>

@endsection


@section('scripts')

@endsection