@extends('layouts.example')


@section('title')
 Navigatu
@endsection


@section('content')

@inject('events', 'App\Models\Event')  

@if(session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif


<Center>
  <h3 class="text-success"><strong>Your Entry</strong></h3>
  </Center>
  </h4>
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
                                <table class="table table-hover mb-0">
                                  <thead>
                                    <tr>
                                     
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Full Name</th>
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Course And Year</th>
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Email</th>
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Contact #</th>
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Title Of the Program</th>
                               
                                      <th scope="col" class="font-weight-bold border text-success fs-6">Certificate</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                       @foreach ($participants as $item)
                                <tr>
                                  <center>
                                  <td class="border"><strong>{{ $item->startupname }}</strong></td>
                                  <td class="border "><strong>{{ $item->problem }}</strong></td>
                                  <td class="border "><strong>{{ $item->solution }}</stro></td>
                                  <td class="border "><strong>{{ $item->target }}</strong></td>
                                  <td class="border "><strong>
                                    @foreach($events->where('id', $item->events_id)->get() as $items)

                                    {{ $items->title }}
                                    @endforeach
                                    </td>
                                  <td class="border "><strong>{{ $item->cert }}</strong></td>
                                </center>


                                <td>
                                  <a href="/showevents/{{ $item->events_id }}" class="btn btn-primary" style="width:">View Event</a>
                                </td>
                                    <td >
                                      <a href="/showss/{{ $item->id }}" class="btn btn-warning">View</a>
                                  </td>
                               

                                </tr>
                                @endforeach   
                                
                                    </tr>
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