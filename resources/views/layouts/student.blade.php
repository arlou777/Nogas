<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../Sources/n.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/dataTables.min.css')  }}">
  <link rel="stylesheet" href="https://maxst.icons8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


  <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
  
  <style>
    
    html,
   body,
   .intro {
     height: 100%;
   }
   
   table td,
   table th {
     text-overflow: ellipsis;
     white-space: nowrap;
     overflow: hidden;
   }
   
   .card {
     border-radius: .5rem;
   }

   .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #06497b;
            height: 100px; /* Adjust the height as needed */
        }
        .navbar img {
            width: 200px; /* Set the desired width */
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
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
      <a href="/home" class="simple-text logo-mini">
        <img src="{{ asset('/Sources') }}/n.png"  alt="">
      </a>
      <a href="/home" class="simple-text logo-normal">
        Navigatu TBI
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">

        <li>
          <center>
            @if (Auth::user()->profile_image)
            <div class="border border-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 150px; height: 150px; overflow: hidden;">
                <img src="{{ url('/storage/' . Auth::user()->profile_image) }}" alt="" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
            </div>
            @endif
            <h6 class="text-center" style="font-size: 18px; font-weight: bold; color: #333;">
              {{ Auth::user()->name }} <br>
              <span style="font-size: 14px; font-weight: normal; color: #666;">({{ Auth::user()->usertype }})</span>
          </h6>
          </center>
        </li>
        


        <li class="{{ 'studenteve' == request()->path() ? 'active' : ''}}">
          <a href="/studenteve">
            <i class="now-ui-icons ui-1_calendar-60"></i>
            <p>Events</p>
          </a>
        </li>

        <li class="{{ 'participant' == request()->path() ? 'active' : ''}}">
          <a href="/participant">
            <i class="now-ui-icons design_app"></i>
            <p>Your Entry</p>
          </a>
        </li>
        
        {{-- <li class="{{ 'team' == request()->path() ? 'active' : ''}}">
          <a href="/team">
            <i class="now-ui-icons users_single-02"></i>
            <p>Team</p>
          </a>
        </li>

        <li class="{{ 'myteam' == request()->path() ? 'active' : ''}}">
          <a href="/myteam">
            <i class="now-ui-icons users_single-02"></i>
            <p>My Team</p>
          </a>
        </li> --}}
        
        <li class="{{ 'profileuser' == request()->path() ? 'active' : ''}}">
          <a href="/profileuser">
            <i class="now-ui-icons users_single-02"></i>
            <p>Profile</p>
          </a>
        </li>

        <li class="{{ 'logout' == request()->path() ? 'active' : ''}}">
          <a href="{{ route('logout') }}"
           onclick="event.preventDefault()
          document.getElementById('logout-form').submit();">

            <i class="fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
            @csrf
          </form>
        </li>
        
       
      </ul>
    </div>
  </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <img src="{{ asset('/Sources') }}/navi.png"  width="200" alt=""> 
          </div>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
         
            
              
              
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

        

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">

            @yield('content')
       
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          
         
        </div>
      </footer>
    </div>
    
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

  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>



  @yield('scripts')
</body>

</html>