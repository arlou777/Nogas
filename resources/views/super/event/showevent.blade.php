@extends('layouts.super')


@section('title')
 Navigatu Show Event
@endsection


@section('content')
 
   
    
@inject('users', 'App\Models\User')  
@inject('event_images', 'App\Models\EventImages')   

</form>
<section class="intro">
    <div class="container-lx">
         
          <a href="/events" class="fw-bold fs-5 btn btn-success"> <i class="fa fa-arrow-left"> </i>Back</a>
          <br>
          <br>
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                       
                      </thead>
                      <tbody>
                       
                        <tr>
                            <th scope="row">Event Type</th>
                           
                            <td><strong>{{ $events->eventtype }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Title</th>
                            <td><strong>{{ $events->title }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Description</th>
                            <td><textarea name="" id="" cols="100" rows="10" style="width: 100%; max-width: 100%;">{{ $events->description }}</textarea>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">From Date</th>
                            <td><strong>{{ $events->date }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">To Date</th>
                            <td><strong>{{ $events->toDate }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Venue</th>
                            <td><strong>{{ $events->session }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Host</th>
                            <td><strong>{{ $events->host }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Partners</th>
                            <td><strong>{{ $events->partner }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Speakers</th>
                            <td><strong>{{ $events->speaker}}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Evaluators</th>
                            <td><strong>{{ $events->evaluator }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Budget</th>
                            <td><strong>{{ $events->budget }}</strong></td>
                          </tr>

                          <tr>
                            <th scope="row">Created By</th>
                            <td><strong> @foreach($users->where('id', $events->admin_id)->get() as $items)
                              {{ $items->name}}
                              @endforeach</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Document</th>
                           <td> <strong>@foreach ($event_images->where('event_id', $events->id)->get() as $image)
                                <a href="{{ url('/storage/' . $image->hashname) }}" target="_blank">{{ $image->document }}</a> <br>
                            @endforeach</strong>
                          </td>
                            </tr>

                          <tr>
                            <th scope="row">Time Created</th>
                            <td><strong>{{ $events->created_at }}</strong></td>
                          </tr>

                          <tr>
                            <th scope="row">Time Updated</th>
                            <td><strong>{{ $events->updated_at }}</strong></td>
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
<br>
<br>
<br>

@endsection


@section('scripts')

    
@endsection