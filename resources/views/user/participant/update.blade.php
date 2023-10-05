@extends('layouts.example')


@section('title')
 Navigatu
@endsection


@section('content')
<br>
<br>
<a href="/participant" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"> </i>Back</a>
<br>
<br>
@if(session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif
<div class="container-lx"> 
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Edit Event</h3>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-6">
                <form action="/update/{{ $participants->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Start Up Name</label>
                        <input type="text" class="form-control" name="startupname" value="{{ $participants->startupname }}">
                        <label>Problem Identify</label>
                        <input type="text" class="form-control" name="problem" value="{{ $participants->problem }}">
                        <label>Solution</label>
                        <input type="text" class="form-control" name="solution" value="{{ $participants->solution }}">
                        <label>Target Market</label>
                        <input type="text" class="form-control" name="target" value="{{ $participants->target }}">
                        <label>ID of The Event</label>
                        <input type="text" class="form-control" name="events_id" value="{{ $participants->events_id }}">
                        <label>Your Navigatu ID</label>
                        <input type="text" class="form-control" name="user_id" value="{{ $participants->user_id }}" readonly>

                    </div>
                    <label>Upload Pitch Deck & other Document</label>
                    <input type="file" class="form-control" name="documents" value="{{ $participants->documents }}" required>
                    <br>
                    <br>
                    
                

                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="/participant" class="btn btn-danger">Cancel</a>
    
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>






@endsection

@section('scripts')

@endsection