<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daffodil International University</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="{{asset('frontend/img/apple-touch-icon.png" rel="apple-touch-icon')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/line-awesome.min.css')}}" rel="stylesheet">
  
 

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
  
  @livewireStyles
</head>

<body> 

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <nav  class="nav">
        <ul>
          <li><a href="/" class="{{request()->is('/') ? 'active':''}}">Home</a></li>
          <li><a href="/about"  class="{{request()->is('about') ? 'active':''}}">About</a></li>
          <li><a href="/contact"  class="{{request()->is('contact') ? 'active':''}}">Contact</a></li>
        </ul>
      </nav>

      <div class="contact-info d-none d-md-block">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">daffodilvarsity.edu.bd</a>
        <i class="bi bi-phone-fill phone-icon"></i>	01811-458850
      </div>
    </div>
  </section>
  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html"><img src="{{asset('frontend/diulogo.png')}}" alt=""></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul class="nav-container">
          <li class="dropdown"><a href="#"  class="{{request()->is('book/items') ? 'active':''}}">Library</a>
            <ul>
              <li><a href="/book/items">Book Items</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" >Transport</a>
            <ul>
              <li><a href="/route">Route</a></li>
              <li><a href="/schedule">Schedule</a></li>
              <li><a href="/driver/list">Driver List</a></li>
              <li><a href="/visiting/car">Visiting Car</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">Food & Cookaries</a>
            <ul>
              <li><a href="/food/court">Food Court</a></li>
              <li><a href="/green/garden">Green Garden</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">Play Ground</a>
            <ul>
              <li><a href="/cricket/football">Cricket & Football</a></li>
              <li><a href="/basketball">Basket Ball</a></li>
              <li><a href="/golf">Golf</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">Spot Booking</a>
            <ul>
              <li><a href="/bonomaya">Bonomaya</a></li>
              <li><a href="/anisulhaq">Annisul Huq Study Centre</a></li>
              <li><a href="/auditorium">Auditorium</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">Innovation Lab</a>
              <ul>
                  <li><a href="/explore/lab">Explore LAb</a></li>
                  <li><a href="/visiting/permission">Visiting Permission</a></li>
              </ul>   
            </ul>
          </li>


        </ul>
          <div class="authentication">
            @if(Route::has('login'))
            @auth
              @if(Auth::user()->utype ==='ADM')
                <div class="admin-design">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                            height="22" alt="" loading="lazy" />{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{route('admin.dashboard')}}">dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                   </li>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">
                      @csrf
                    </form>
                </li>
                </div>
              @else
                <div class="user-design">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                            height="22" alt="" loading="lazy" />{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{route('user.dashboard')}}">dashboard</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">
                      @csrf
                    </form>
                </li>
                </div>
              @endif
            @else
            <li class="menu-item" style="color:#118DC5;" ><i class="bi bi-person-square"></i><a title="Register or Login" href="{{route('login')}}">Login</a></li>
            <li class="menu-item" style="color:#118DC5;"><i class="bi bi-briefcase-fill"></i><a title="Register or Login" href="{{route('register')}}">Register</a></li>
            @endif
          @endif
          </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  {{$slot}}

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row d-flex justify-content-between">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Library</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Playground</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Visiting Car</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Greenland</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bonomaya</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Food Court</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3 class="text-white">contact us</h3>
            <p>
             Daffodil International University<br>
              Ashulia server dhaka<br><br>
              <strong>Phone:</strong>01811-458850<br>
              <strong>Email:</strong> diljeb@daffodilvarsity.edu.bd<br>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
 

    <!-- Template Main JS File -->
  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script src="{{asset('frontend/js/file.js')}}"></script>
  <script src="{{asset('frontend/js/checkbox.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

@livewireScripts
<script>
  window.livewire.on('bookingAdded',()=>{
    $('#addBookingModel').modal('hide');
  });

  window.livewire.on('bookingUpdated',()=>{
    $('#updateBookingModel').modal('hide');
  });
</script>


</body>

</html>