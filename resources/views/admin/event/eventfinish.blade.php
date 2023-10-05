@extends('layouts.admin')


@section('title')
 Navigatu Event
@endsection


@section('content')


@inject('users', 'App\Models\User')  
@if(session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="col-12">
  <center> <h3 class="text-success"><strong>Finished Events</strong></h3></center>
  </div>
  <br>
 <br>

<div class="container">
  <div class="row">
    
    <div class="col-12">
      <center>
        <h4><strong>Search Events by Date Range</strong>
                            
        </h4>
        <form action="/tosearchs" method="GET">
            <label for="from_date">From Date:</label>
            <input type="date" id="from_date" name="from_date">
    
            <label for="to_date">To Date:</label>
            <input type="date" id="to_date" name="to_date">
    
            <input type="submit" value="Search">
        </form>
      </center>
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
                                
                                <th scope="col" class="font-weight-bold border  text-primary fs-6">EVENT TYPE</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('title')</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('description')</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('date')</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">to Date</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">Created By</th>
                                <th scope="col" class="font-weight-bold border  text-primary fs-6">PARTICIPANTS</th>
                                <th scope="col" class="font-weight-bold fs-6">ACTION</th>
                                
                            </tr>
                          </thead>
                          <tbody>
                              
                               @foreach ($events as $item)
                        <tr>
                          
                            <td class="border border-dark"><strong>{{ $item->eventtype }}</strong></td>
                            <td  class="border border-dark"><strong>{{ $item->title }}</strong></td>
                            <td class="border border-dark"><strong>{{ $item->description }}</strong></td>
                            <td class="border border-dark"><strong>{{$item->date }}</strong></td>
                            <td class="border border-dark"><strong>{{$item->toDate }}</strong></td>
                            <td class="border border-dark"> <strong>  @foreach($users->where('id', $item->admin_id)->get() as $items)
                              {{ $items->name}}
                              @endforeach</strong>
                             </td>

                             <td class="border border-dark">
                              <a href="/partshows/{{ $item->id }}" class="btn btn-primary" style="width:"><i class="fa fa-eye"></i>Show Registered Participants</a>
                          </td> 
                          
                            
                          
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" target="_blank" href="{{ route('exports.pdf', ['id' => $item->id]) }}">Export to PDF</a> 
                                <a href="/showeventss/{{ $item->id }}" class="dropdown-item"><i class="fa fa-eye"></i> View More</a>
                                <a href="/eventedits/{{ $item->id }}" class="dropdown-item"><i class="fa fa-pencil"></i> EDIT</a>
                                <a href="/addss/{{ $item->id }}" class="dropdown-item"><i class="fa fa-pencil"></i> EDIT/ADD</a>
                                <form method="POST" action="/eventdeletes/{{$item->id}}" accept-charset="UTF-8">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                  <button type="submit" class="dropdown-item" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</button>
                                </form>
                              </div>
                            </div>
                          </td>
                        @endforeach
                        

                            </tr>
                            
                            </tr>
                          </tbody>
                          
                        </table>
                      
                      </div>
                      <div style="padding: 10px; float:right;">
                        {{ $events->links() }}
                      </div>
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