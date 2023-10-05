@extends('layouts.super')


@section('title')
 Navigatu Participant
@endsection


@section('content')
@inject('users', 'App\Models\User')  
@inject('events', 'App\Models\Event')  
<a href="/events"></a>

@if(session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<Center>
  <h3 class="text-success"><strong>Participant</strong></h3>
  </Center>
        <br>
        <br>
          <br>
      
        <br>
        <br>
            <section class="intro">
                <div class="container-lx">

                      <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                               
                      <div class="row justify-content-center">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table  class="table table-striped" id="myTable">
                                  <thead>
                                    <tr>
                                     
                            <th scope="col" class="font-weight-bold border  text-success fs-6">Full Name</th>
                            <th scope="col" class="font-weight-bold border  text-primary fs-6">Course & Year</th>
                            <th scope="col" class="font-weight-bold border  text-primary fs-6">Email</th>
                            <th scope="col" class="font-weight-bold border  text-primary fs-6">Contect</th>
                            <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('events_id')</th>
                            <th scope="col" class="font-weight-bold border text-success fs-6">Certificate</th>
                            {{-- <th scope="col" class="font-weight-bold border  text-success fs-6">Created By</th> --}}
                            <th scope="col" class="font-weight-bold border text-success fs-6">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  
                                       @foreach ($participants as $item)
                                <tr>
                                  
                                    <td class="border border-dark"><strong>{{ $item->startupname }}</strong></td>
                                    <td class="border border-dark"><strong>{{ $item->problem }}</strong></td>
                                    <td class="border border-dark"><strong>{{ $item->solution }}</strong></strong></td>
                                    <td class="border border-dark"><strong>{{ $item->target }}</strong></td>
                                    <td class="border border-dark"><strong>  @foreach($events->where('id', $item->events_id)->get() as $items)

                                      {{ $items->title }}
                                      @endforeach</strong></td>
                                    <td class="border border-dark"><strong>{{ $item->cert }}</strong></td>
                                    
                                    {{-- <td class="border border-dark">
                                  
                                      @foreach($users->where('id', $item->user_id)->get() as $items)

                                      {{ $items->name }}
                                      @endforeach
                                    </td> --}}
                                
                                    <td>
                                      <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="/show/{{ $item->id }}">View</a>
                                          <a class="dropdown-item" href="/partedit/{{ $item->id }}">Edit</a>
                                          <form method="POST" action="/delete/{{$item->id}}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="dropdown-item" title="Delete Event" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                          </form>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                @endforeach
                                
                                   
                                  </tbody>
                                </table>
                              </div>
                              <div style="padding: 10px; float:right;">
                              {{ $participants->links() }}
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
              </section>
      
@endsection


@section('scripts')

    
@endsection