@extends('layouts.super')


@section('title')
 Navigatu Event - Search
@endsection

@inject('users', 'App\Models\User')  
@section('content')
<center><h3 class="text-success"><strong>Events</strong></h3></center>
<br>
<br>

<div class="container">
  <div class="row">

   
<br>
<div class="col-12">
  <center>
  <h4><strong>Search Events by Date Range</strong>
                         
                                        
  </h4>
    <form action="/tosearch" method="GET">
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
                   
                    <br>
                    <div class="col-12">
                      <a href="/eventfinish" class="btn btn-warning btn-sm float-right" title="finished event">
                        <i class="fa fa-eye" aria-hidden="true"></i>Finished Events
                    </a>
                                          
                      <a href="/add" class="btn btn-success btn-sm float-right " title="Add New Event">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Event
                    </a>  
                    </div>
                   <br>
                   
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table  class="table table-striped" id="myTable">
                      <thead>
                        <tr>
                          
                           
                            <th scope="col" class="font-weight-bold border  text-primary fs-6">EVENT TYPE</th>
                            <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('title')</th>
                            <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('description')</th>
                            <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('date')</th>
                            <th scope="col" class="font-weight-bold border  text-success fs-6">To Date</th>
                            <th scope="col" class="font-weight-bold border  text-success fs-6">Created By</th>
                            <th scope="col" class="font-weight-bold border  text-primary fs-6">PARTICIPANTS</th>
                            <th scope="col" class="font-weight-bold fs-6">ACTION</th>
                            
                        
                        </tr>
                      </thead>
                      <tbody>
                       
                           @foreach ($events as $item)
                    <tr >
                    
                        <td class="border border-dark"><strong>{{ $item->eventtype }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->title }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->description }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->date }}</strong></td>
                        <td class="border border-dark"><strong>{{ $item->toDate }}</strong></td>
                        <td class="border border-dark"> <strong>  @foreach($users->where('id', $item->admin_id)->get() as $items)
                          {{ $items->name}}
                          @endforeach
                        </strong>
                         </td>
                        <td class="border border-dark">
                          <a href="/partshow/{{ $item->id }}" class="btn btn-primary" style="width:"><i class="fa fa-eye"></i>Show Registered Participants</a>
                      </td> 
                      
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" target="_blank" href="{{ route('export.pdf', ['id' => $item->id]) }}">Export to PDF</a>     
                            <a href="/showevent/{{ $item->id }}" class="dropdown-item"><i class="fa fa-eye"></i> View More</a>
                            <a href="/eventedit/{{ $item->id }}" class="dropdown-item"><i class="fa fa-pencil"></i> EDIT</a>
                            <a href="/add/{{ $item->id }}" class="dropdown-item"><i class="fa fa-pencil"></i> EDIT/ADD</a>
                            <form method="POST" action="/eventdelete/{{$item->id}}" accept-charset="UTF-8">
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                              <button type="submit" class="dropdown-item" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</button>
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
    </div>
  </section>
@endsection


@section('scripts')

    
@endsection