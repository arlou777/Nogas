@extends('layouts.super')


@section('title')
 Navigatu User Control
@endsection


@section('content')
    <Center>
    <h3 class="text-success"><strong>User Control Panel</strong></h3>
    </Center>
<br>
<br>
<div class="container-lx">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                    
                        <thead class="text-primary">
                            
                         
                            <th class="font-weight-bold  text-success fs-6">Image</th>        
                            <th class="font-weight-bold  text-success fs-6">ID number</th>
                            <th class="font-weight-bold  text-success fs-6">Name</th>
                            <th class="font-weight-bold  text-success fs-6">Email</th>
                            <th class="font-weight-bold  text-success fs-6">Role</th>
                            <th class="font-weight-bold  text-success fs-6">Program</th> 
                            <th class="font-weight-bold  text-success fs-6">Action</th> 
                            
                       
                        </thead>
                     
                        
                            @foreach ($users as $item)
                                
                            <tr>
                               
                                        <td class="">
                                            <img src="{{ url('/storage/' . $item->profile_image) }}" class=" rounded-circle d-flex justify-content-center align-items-center" width="75">
                                            
                                        </td>
                                        <td><strong>{{ $item->studentid }}</strong></td>
                                        <td><strong>{{ $item->name }}</strong></td>
                                        <td><strong>{{ $item->email }}</strong></td>
                                        <td><strong>{{ $item->usertype }}</strong></td>
                                        <td><strong>{{ $item->program }}</strong></td>
                            

                                        <td>
                                            <div class="dropdown">
                                              <button class="btn btn-secondary dropdown-toggle" type="button" id="userActionsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="userActionsDropdown">
                                                <a href="/showuser/{{ $item->id }}" class="dropdown-item"> View More</a>
                                                <a href="/user-edit/{{ $item->id }}" class="dropdown-item"> Edit</a>
                                                <form method="POST" action="/userdelete/{{$item->id}}" accept-charset="UTF-8">
                                                  {{ method_field('DELETE') }}
                                                  {{ csrf_field() }}
                                                  <button type="submit" class="dropdown-item" onclick="return confirm('Confirm delete?')">Delete</button>
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
                {{ $users->links() }}
            </div>
            </div>
        </div>
    </div>


</div>
</div>
@endsection


@section('scripts')

@endsection