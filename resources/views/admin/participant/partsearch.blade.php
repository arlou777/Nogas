@extends('layouts.admin')


@section('title')
 Navigatu  Participant - Search
@endsection


@section('content')

@inject('users', 'App\Models\User')  
<div class="col-12">
  <Center>
    <h3 class="text-success"><strong>Participant</strong></h3>
    </Center>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-12">
      
      <h4><strong>Search</strong></h4>
      <form type="get" action="/partsearchs">
          <div class="input-group no-border">
            <input type="search" name="part" value="" class="form-control" placeholder="Search for The Name...">
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
              </div>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
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
                    <table class="table table-striped" id="myTable">
                      <thead>
                        <tr>
                          
                          <th scope="col" class="font-weight-bold border  text-success fs-6">Full Name</th>
                          <th scope="col" class="font-weight-bold border  text-primary fs-6">Course & Year</th>
                          <th scope="col" class="font-weight-bold border  text-primary fs-6">Email</th>
                          <th scope="col" class="font-weight-bold border  text-primary fs-6">Contact #</th>
                          <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('events_id')</th>
                          <th scope="col" class="font-weight-bold border  text-primary fs-6">Certificate</th>
                          <th scope="col" class="font-weight-bold border  text-primary fs-6">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                           @foreach ($participants as $item)
                    <tr>
                     
                        <td class="border border-dark"><strong>{{ $item->startupname }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->problem }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->solution }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->target }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->events_id }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->cert }}</strong></td>
                       <td>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="/shows/{{ $item->id }}">View</a>
                              <a class="dropdown-item" href="/partedits/{{ $item->id }}">Edit</a>
                              <form method="POST" action="/deletes/{{$item->id}}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="dropdown-item" title="Delete Event" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                              </form>
                            </div>
                          </div>
                        </td>
                  
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
      
  </section>


@endsection


@section('scripts')

    
@endsection