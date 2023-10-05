@extends('layouts.example')


@section('title')
 Navigatu
@endsection


@section('content')
@inject('event_images', 'App\Models\EventImages')
@if(session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<style>

    

</style>

<div style>
<div class=" pt-10 b-5">
    <Center>
        <h3 class="text-success"><strong>Events</strong></h3>
        </Center>
</div>
<br>
<br>
<div class="container-lx">
@foreach ($events->chunk(2) as $eventPair)
<div class="row">
    @foreach ($eventPair as $item)
    <div class="col-md-6 ">
       
        <section class="intro">
            <div class="bg-image h-100" style="border-radius:2%;">
               
                <div class="mask d-flex align-items-center h-100" >
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card">
                                  
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <a href="/addpar?events_id={{ $item->id }}" class="btn btn-success btn-sm float-right" title="Add Here">
                                                Click Here To Register
                                            </a>
                                            <br>
                                            <br>
                                            <br>
                                           
                                            <h1 class="font-weight-bold card-title  mb-4"><center>{{ $item->title }}</center></h1>
                                            <br><br>
                                            <table class="table table-hover mb-0">
                                                <tbody>
                                                   
                                                    <tr>
                                                        <th scope="row">Event Type:</th>
                                                        <td><strong>{{ $item->eventtype }}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Title:</th>
                                                        <td><strong>{{ $item->title }}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Description:</th>
                                                        <td><strong>{{ $item->description }}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">From Date:</th>
                                                        <td><strong>{{ $item->date }}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">To Date:</th>
                                                        <td><strong>{{ $item->toDate }}</strong></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">Action</th>
                                                      <td >
                                                          <a href="/studshowevent/{{ $item->id }}" class="btn btn-warning float-left">View More</a>
                                                      </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endforeach
</div>
<div class="float-right mt-2">
    {{ $events->links() }}
</div>
@endforeach
</div>
@endsection
</div>






@section('scripts')

@endsection


