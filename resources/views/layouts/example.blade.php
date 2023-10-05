<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ !empty ($header_title) ? $header_title : ''}} Navigatu</title>
  <link rel="icon" href="{{ asset('dist/img/navigatu.jpg') }}" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset ('plugins/summernote/summernote-bs4.min.css') }}">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <style>

  .sidebar-dark-primary {
    background-color: #002855;
  }

  .document-container {
    overflow-x: auto;
}

.document-row {
    display: flex;
    flex-direction: row;
}

.document-item {
    margin-right: 20px; /* Adjust spacing between documents */
    border: 1px solid #ccc; /* Add borders to separate documents */
    padding: 10px;
}

.gradient-custom {
  /* fallback for old browsers */
  background: #87CEEB;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right bottom, rgba(135, 206, 235, 1), rgba(173, 216, 230, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right bottom, rgba(135, 206, 235, 1), rgba(173, 216, 230, 1));
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
 
  .btn {
  padding: .45rem 1.5rem .35rem;
}

.gradient-custom {
  /* fallback for old browsers */
  background: #3284ff;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgb(243, 205, 230), rgb(243, 205, 230));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, rgb(231, 235, 243), rgb(45, 123, 240))
}

.form-white.input-group>.form-control:focus {
  border-color: #fff;
  box-shadow: inset 0 0 0 1px #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}
</style>
    @yield('style')
</head>
<body class="hold-transition layout-top-nav" style="background-color: rgb(135, 135, 218);">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand-lg navbar-white navbar-light  ">
  
  <a href="/studenteve" class="brand-link">
      <img src="{{ asset('/Sources') }}/n.png"  class="brand-image img-circle elevation-3" style="opacity: .7">
      <span class="brand-text "> <strong> Navigatu</strong></span>
  </a>
  
  <!-- Toggler/collapsible Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  
  
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto justify-content-end " >

 <li class="nav-item {{ 'studenteve' == request()->path() ? 'active' : ''}}">

 <a href="/studenteve" class="nav-link ">
   
   <p>
  <strong>
    Events
  </strong>
   </p>
 </a>
</li>


<li class="nav-item {{ 'participant' == request()->path() ? 'active' : ''}}">
 <a href="/participant" class="nav-link">
   
   <p><strong>
      Your Entry
      </strong>
   </p>
 </a>
</li>





   

  </ul>

  <ul class="navbar-nav ms-auto p-10">
    <li class="nav-item dropdown">       
          @if (Auth::user()->profile_image)
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img style="height: 40px; width: 40px;" src="{{ url('/storage/' . Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
            {{ Auth::user()->name }} {{ Auth::user()->last_name }}
        </a>
        @else
        <!-- Display the default profile image -->
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img style="height: 40px; width: 40px;" src="{{ asset('/Sources') }}/def.jpg" alt="Default Profile Image" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
            {{ Auth::user()->name }} {{ Auth::user()->last_name }}
          </a>
        @endif
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/profileuser"> <i class="now-ui-icons users_single-02"></i> Profile</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault()
       document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>Logout
       </a>
       <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
         @csrf
       </form>
        </div>
    </li>
</ul>

  
  
  </div>
</nav>    


  {{-- <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" >
      <img src="{{ asset('/Sources') }}/n.png"  class="brand-image img-circle elevation-3 " style="opacity: .7;width:50px; height:50px;" >
      <span class="brand-text "> <strong> Navigatu</strong></span>
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="navbarSupported" aria-controls="navbarSupported" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupported">
    
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item {{ 'studenteve' == request()->path() ? 'active' : ''}}">
          <a href="/studenteve" class="nav-link ">
   
            <p>
           <strong>
             Events
           </strong>
            </p>
          </a>
        </li>
        <li class="nav-item {{ 'participant' == request()->path() ? 'active' : ''}}">
          <a href="/participant" class="nav-link">
            
            <p><strong>
               Your Entry
               </strong>
            </p>
          </a>
         </li>
        
      </ul>
      <ul class="navbar-nav ms-auto p-10">
        <li class="nav-item dropdown">       
              @if (Auth::user()->profile_image)
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="height: 40px; width: 40px;" src="{{ url('/storage/' . Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                {{ Auth::user()->name }} {{ Auth::user()->last_name }}
            </a>
            @else
            <!-- Display the default profile image -->
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="height: 40px; width: 40px;" src="{{ asset('/Sources') }}/def.jpg" alt="Default Profile Image" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                {{ Auth::user()->name }} {{ Auth::user()->last_name }}
              </a>
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="/profileuser"> <i class="now-ui-icons users_single-02"></i> Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault()
           document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>Logout
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
             @csrf
           </form>
            </div>
        </li>
    </ul>
     
       
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar --> --}}




<div class="content-wrapper b-10" style="margin-left: 0;">
  <br>
  <br>
    @yield('content')
 
    </div>
    <footer class="main-footer text-center fixed-bottom">
      <strong>&copy; {{ date('Y')}} Navigatu.com</strong>
      All rights reserved.
    </footer>
   
  
</div>

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset ('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset ('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset ('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset ('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset ('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.js') }}"></script>


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

@yield('script')

</body>
</html>

