@extends('layouts.admin')


@section('title')
 Navigatu Dashboard
@endsection


@section('content')
@inject('users', 'App\Models\User')  
<style>
.hero{
  width: 100%;
  height: 100vh; 
  background-image: url(Sources/oc.jpg);
  background-size: cover;
  background-position:center;
  position: relative;
  overflow: hidden;
  border-radius: 1%;
}

.bubbles img{
  width: 50px;
  animation: bubble 7s linear infinite
}

.bubbles {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: absolute;
    bottom: -70px;
}

@keyframes bubble{
  0%{
    transform: translateY(0);
    opacity: 0;
  }
  50%{
    
    opacity: 1;
  }
  70%{
    
    opacity: 1;
  }
  100%{
    transform: translateY(-80vh);
    opacity: 0;
  }
}

.bubbles img:nth-child(1){
    animation-delay:2s;
    width: 15px;
  }
  .bubbles img:nth-child(2){
    animation-delay:1s;
  }

  .bubbles img:nth-child(3){
    animation-delay:3s;
    width: 20px;
  }

  .bubbles img:nth-child(4){
    animation-delay:4.5s;
    width: 25px;
  }
  .bubbles img:nth-child(5){
    animation-delay:3s;
  }
  .bubbles img:nth-child(6){
    animation-delay:1.5s;
    width: 10px;
  }

  .bubbles img:nth-child(7){
    animation-delay:2s;
    width: 15px;
  }
  .bubbles img:nth-child(8){
    animation-delay:1s;
  }

  .bubbles img:nth-child(9){
    animation-delay:3s;
    width: 20px;
  }

  .bubbles img:nth-child(10){
    animation-delay:4.5s;
    width: 25px;
  }
  .bubbles img:nth-child(11){
    animation-delay:3s;
  }
  .bubbles img:nth-child(12){
    animation-delay:1.5s;
    width: 15px;
  }

</style>
  <div class="col-12">
    <Center>
      <h1 class="text-success"><strong>Dashboard</strong></h1>
      </Center>
  </div>
  <br>  
<div>
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
           
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h5>Total Events</h5>
                <h3><center>{{ $eventCount }}</center></h3>
                
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="/eventss" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Total Participants</h5>
                <h3><center>{{ $participantsCount }}</center></h3>
         

               
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/indexs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Total Users</h5>
                <h3><center>{{ $usersCount }}</center></h3>
                

                
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Total Admins</h5>
                <h3><center>{{ $adminCount }}</center></h3>
             

               
              </div>
              <div class="icon">
                <i class="ion ion-android-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->


    
        <div class="container-lx" >
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      
                        <div class="card-header">

                                  <br>

                                  <Center>
                                    <h3 class="text-success"><strong>Upcoming Events </strong></h3>
                                    </Center>
                                
                            <br>
                              


              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover mb-0">
                          
                          <thead>
                            <tr>
                                
                                <th scope="col" class="font-weight-bold border  text-primary fs-6">EVENT TYPE</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('title')</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('description')</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">@sortablelink('date')</th>
                                <th scope="col" class="font-weight-bold border  text-success fs-6">To Date</th>
                                <th scope="col" class="font-weight-bold border  text-primary fs-6">Created By</th>
                                <th scope="col" class="font-weight-bold border  text-primary fs-6">PARTICIPANTS</th>
                                <th scope="col" class="font-weight-bold fs-6">ACTION</th>
                                
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                               @foreach ($events as $item)
                        <tr class="dropdown-row">
                           
                            <td class="border border-dark fw-bold "><strong>{{ $item->eventtype }}</strong></td>
                            <td class="border border-dark fw-bold"><strong>{{ $item->title }}</strong></td>
                            <td class="border border-dark fw-bold"><strong>{{ $item->description }}</strong></td>
                            <td class="border border-dark fw-bold"><strong>{{$item->date }}</strong></td>
                            <td class="border border-dark fw-bold"><strong>{{$item->toDate }}</strong></td>
                            <td class="border border-dark fw-bold"><strong>@foreach($users->where('id', $item->admin_id)->get() as $items)
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

    <div class="bubbles">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
      <img src="Sources/bubble.png" alt="">
    </div>
  </div>
 

@endsection


@section('scripts')

@endsection