@extends('layouts.super')


@section('title')
 Navigatu View User
@endsection


@section('content')
 
   
    

   

</form>
<section class="intro">
    <div class="container-lx">
          <br>
          <br>
          <a href="/users" class="fw-bold fs-5 btn btn-success">Back</a>
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
                          <th scope="row">Profile Picture</th>
                          <td>
                            
                          
                            <div class="border border-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 200px; height: 200px; overflow: hidden;">
                                <img src="{{ url('/storage/' . $users->profile_image) }}" alt="" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                            </div>
                           
                           
                       
                        </td>
                        </tr>
                        <tr>
                            <th scope="row">Navigatu ID</th>
                           
                            <td>{{ $users->id }}
                                </td>
                            
                          </tr>
                          <tr>
                            <th scope="row">Name</th>
                            <td>{{ $users->name }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td>{{ $users->email }}</td>
                          </tr>
                          
                          <tr>
                            <th scope="row">ID Number</th>
                            <td>{{ $users->studentid }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Age</th>
                            <td>{{ $users->age }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Course and Year</th>
                            <td>{{ $users->program }}</td>
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