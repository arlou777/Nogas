@extends('layouts.example')


@section('title')
 Navigatu
@endsection


@section('content')
 
   
    

   

</form>
<section class="intro">
    <div>
       <div class="container-lx">
          <br>
          <br>
          <a href="/participant" class="fw-bold fs-5 btn btn-success">Back</a>
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
                          <th scope="row">Full Name</th>
                          <td>{{ $participants->startupname}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Course & Year</th>
                           
                            <td>{{ $participants->problem }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td>{{ $participants->solution }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Contact #</th>
                            <td>{{ $participants->target }}</td>
                          </tr>
                         
                          <tr>
                            <th scope="row">Document</th>
                            <td><a href="{{ url('/storage/' . $participants->documents) }}" target="_blank"> Click here to View 
                            </a>
                            
                              </td>
                          </tr>
                         
                          <tr>
                            <th scope="row">Certificate</th>
                            <td>{{ $participants->cert }}</td>
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