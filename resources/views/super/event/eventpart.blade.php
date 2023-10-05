@extends('layouts.super')


@section('title')
 Navigatu  Participant
@endsection


@section('content')

    <center> <h3><strong>Participants</strong></h3></center>
    <br>
    <br>
                    <div class="container-lx">                   
                          <div class="row justify-content-center">
                            
                            <div class="col-12">
                              
                              <div class="card">
                                <div class="card-body">
                                  <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                     
                                      <a href="/events" class="fw-bold fs-5 btn btn-success">Back</a>
                                      <br>
                                      <br>
                                      
                                      <center><h4>Total Participants: <strong> {{ $participantCount }}</strong></h4></center>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="card">
                                              <div class="card-header">
        
                                                  @if(session('status'))
                                                  <div class="alert alert-success" role="alert">
                                                      {{ session('status') }}
                                                  </div>
                                                  @endif
                                                  <h4><strong>Search</strong></h4>
                                                      <form type="get" action="/partsearch">
                                                          <div class="input-group no-border">
                                                            <input type="search" name="part" value="" class="form-control" placeholder="Search ID of The Program...">
                                                            <div class="input-group-append">
                                                              <div class="input-group-text">
                                                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </form>
                                      <thead>
                                        <tr>
                                <th scope="col" class="font-weight-bold border text-success fs-6">Full Name</th>
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Course And Year</th>
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Email</th>
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Contact #</th>
                                     
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Certificate</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                           @foreach ($participants as $item)
                                    <tr>
                                        <td class="border "><strong>{{ $item->startupname }}</strong></td>
                                        <td class="border "><strong>{{ $item->problem }}</strong></td>
                                        <td class="border "><strong>{{ $item->solution }}</strong></td>
                                        <td class="border "><strong>{{ $item->target }}</strong></td>
                                        
                                        <td class="border "><strong>{{ $item->cert }}</strong></td>
                                        <td>
                                          <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="/show/{{ $item->id }}">View</a>
                                              <a class="dropdown-item" href="/partedit/{{ $item->id }}">Edit</a>
                                              <form method="POST" action="/partdelete/{{$item->id}}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="dropdown-item btn-danger btn-sm" title="Delete Event" onclick="return confirm('Confirm delete?')">Delete</button>
                                              </form>
                                            </div>
                                          </div>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                    
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                    </div>
                
@endsection


@section('scripts')

    
@endsection