@extends('layouts.example')

@section('title')
 Navigatu
@endsection

    
@section('content')

@inject('event_images', 'App\Models\EventImages')


  <section id="contact" class="contact section-padding" >
    <div class="container-lx">
      <br>
      <br>  
      <a href="/participant" class="fw-bold fs-5 btn btn-primary">  <i class="fa fa-arrow-left"> </i>Back</a>
      <br>
      <br>
        @foreach ($events as $item)
            
       
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h1 class=" text-uppercase"><strong>{{ $item->title }}</strong></h1>
                </div>
            </div>
        </div>
  <div class="row m-0" >
    <div class="col-md-12 p-0 pt-4 pb-4">
      <form action="#" class="bg-light p-4 m-auto" style="border-radius: 20px">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-5 ">
              <center>
                
                <textarea class=" form-control fw-bolder text-wrap" style="border-radius: 10px;" readonly>{{ $item->description }}</textarea>            
                <label class=" font-italic  fs-4"><strong>Description</strong></label>
              </center>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="">
              <center>
                <p class="  font-italic fs-4"><label class="float-left fw-bold ">Event Type :</label><strong>{{ $item->eventtype }}</strong></p>
              
            </center>
          </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <center>
              <p class=" font-italic fs-4"><label class="float-left fw-bold ">Date :</label><strong>{{ $item->date }}</strong></p>
              
          </center>
        </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <center>
              <p class=" font-italic fs-4"><label class="float-left fw-bold ">Venue :</label><strong>{{ $item->session }}</strong></p>
          </center>
        </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <center>
              <p class=" font-italic fs-4"><label class="float-left fw-bold ">Host :</label><strong>{{ $item->host }}</strong></p>
          </center>
        </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <center>
              <p class=" font-italic fs-4"><label class="float-left fw-bold ">Partners :</label><strong>{{ $item->partner }}</strong></p>
          </center>
        </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <center>
              <p class=" font-italic fs-4"><label class="float-left fw-bold ">Speaker :</label><strong>{{ $item->speaker }}</strong></p>
          </center>
        </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <center>
              <p class=" font-italic fs-4"><label class="float-left fw-bold ">Evaluator :</label><strong>{{ $item->evaluator }}</strong></p>
          </center>
        </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <center>
              <p class=" font-italic fs-4"><label class="float-left fw-bold ">Budget :</label><strong>{{ $item->budget }}</strong></p>
          </center>
        </div>
        </div>

        <div class="col-md-12">
          <div class="mb-3">
              <label class=" float-left fs-6"><strong>Document</strong></label>  &nbsp;  &nbsp;

                 @foreach ($event_images->where('event_id', $item->id)->get() as $image)
                     <a href="{{ url('/storage/' . $image->hashname) }}" target="_blank">{{ $image->document }}</a>  &nbsp; &nbsp;
                 @endforeach
          </div>
         
        </div>
       
      </form>
      @endforeach
    </div>
  </div>
</div>


  </section>


 <style>
    /* .contact {
        background-image: url('/Sources/style.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 20px;
    } */
</style>

@endsection


@section('scripts')

    
@endsection