@extends('layouts.super')

@section('title')
 Navigatu Participant - Edit
@endsection


@section('content')

<center><h3 class="text-success"><strong>Edit Participants</strong></h3></center>
<br>
<br>
<div class="container-lx"> 
<div class="row">
<div class="col-md-12">
    <div class="card">
        
        <div class="card-header">
              
                <a href="/index" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"> </i>Back</a>
                <br><br>
            
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-12">
                <form action="/partupdate/{{ $participants->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                       
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="startupname" value="{{ $participants->startupname }}">
                        <label>Course & Year</label>
                        <input type="text" class="form-control" name="problem" value="{{ $participants->problem }}">
                        <label>Email</label>
                        <input type="text" class="form-control" name="solution" value="{{ $participants->solution }}">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="target" value="{{ $participants->target }}">
                        <label>Event Name</label>
                        <input type="text" class="form-control" name="events_id" value="{{ $participants->events_id }}">
                        <label>Navigatu ID</label>
                        <input type="text" class="form-control" name="user_id" value="{{ $participants->user_id }}">
                        <label>Certificate</label>
                        <input type="text" class="form-control" name="cert" value="{{ $participants->cert }}">
                    </div>
                    
                    <label>Upload Pitch Deck & other Document</label>
                    <input type="file" class="form-control" name="documents" value="{{ $participants->documents }}">

                    <br>
                    <br>
                    @if ($participants->documents)
                    <p>Previously Uploaded File: {{ $participants->documents }}</p>
                         @endif
                

                        <button type="submit" onclick="return confirm('Applicant Has Been Updated')" class="btn btn-success">Update</button>
                        <a href="/index" class="btn btn-danger">Cancel</a>
    
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<br>
<br>
<br>
    




@endsection

@section('scripts')

@endsection