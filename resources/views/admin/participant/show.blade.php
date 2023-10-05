@extends('layouts.admin')


@section('title')
 Navigatu View Participant
@endsection


@section('content')
 
   
    

   

</form>
<section class="intro">
     <div class="container-lx">
          <br>
          <br>
          <a href="/indexs" class="fw-bold fs-5 btn btn-success">Back</a>
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
                          <td><strong>{{ $participants->startupname}}</strong></td>
                        </tr>
                        <tr>
                            <th scope="row">Course & Year</th>
                           
                            <td><strong>{{ $participants->problem }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td><strong>{{ $participants->solution }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Contact </th>
                            <td><strong>{{ $participants->target }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Document</th>
                            <td><a href="{{ url('/storage/' . $participants->documents) }}" target="_blank"> Click here to View </a></td>
                          </tr>
                         
                          <tr>
                            <th scope="row">Certificate</th>
                            <td><strong>{{ $participants->cert }}</strong></td>
                          </tr>
                          <tr>
                            <th scope="row">Time Created</th>
                            <td><strong>{{ $participants->created_at }}</strong></td>
                          </tr>

                          <tr>
                            <th scope="row">Time Updated</th>
                            <td><strong>{{ $participants->updated_at }}</strong></td>
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