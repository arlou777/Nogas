@extends('layouts.super')


@section('title')
 Navigatu Event - Edit
@endsection


@section('content')



<div class="container-lx"> 

<a href="/events" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"></i>Back</a>
<center> <h3 class="text-success"><strong>Edit Event</strong></h3></center>
<br>
<br>
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-md-12">
                <form action="/eventupdate/{{ $events->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                       
                        <label>Event Type</label>   
                        <input type="text" class="form-control" name="title" value="{{ $events->eventtype }}">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $events->title }}">
                        <label>Description</label>
                        <textarea type="text" class="form-control" name="description" value="">{{ $events->description }}</textarea>
                        <label>From Date</label>
                        <input type="date" class="form-control" name="date" value="{{ $events->date }}">
                        <label>To Date</label>
                        <input type="date" class="form-control" name="toDate" value="{{ $events->toDate }}">
                        <label>Venue</label>
                        <input type="text" class="form-control" name="session" value="{{ $events->session }}">
                        <label>Host</label>
                        <input type="text" class="form-control" name="host" value="{{ $events->host }}">
                        <label>Partners</label>
                        <input type="text" class="form-control" name="partner" value="{{ $events->partner }}">
                        <label>Speaker</label>
                        <input type="text" class="form-control" name="speaker" value="{{ $events->speaker}}">
                        <label>Evaluators</label>
                        <input type="text" class="form-control" name="evaluator" value="{{ $events->evaluator }}">
                        <label>Budget</label>
                        <input type="text" class="form-control" name="budget" value="{{ $events->budget }}">
                        <label>Created By</label>
                        <input type="text" class="form-control" name="budget" value="{{ $events->admin_id }}">  
                    
                    </div>
                        <label>Document</label></br>
                        <input type="file" name="document[]" id="document" value="{{ $events->document }}" multiple ></br>
                        <br>
                        <br>
                        <button type="submit" onclick="return confirm('Event Has Been Updated')" class="btn btn-success">Update</button>
                        <a href="/events" class="btn btn-danger">Cancel</a>
    
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