<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <div class="bg-white shadow-md" x-data="{ isOpen: false }">
      <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
          <div class="flex items-center justify-between">
          <img src="{{ asset('assets/img/logo.jpg') }}" style="width:80px;height:60px;">

              <a href="http://localhost/newres/public/"
              class="text-lg font-semibold tracking-widest text-white-900 uppercase rounded-lg focus:outline-none focus:shadow-outline" style="color: white">GRILLRILLA</a>
              <!-- Mobile menu button -->
              <div @click="isOpen = !isOpen" class="flex md:hidden">
                  <button type="button"
                      class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                      aria-label="toggle menu">
                      <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                          <path fill-rule="evenodd"
                              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                          </path>
                      </svg>
                  </button>
              </div>
          </div>

          <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
          <div :class="isOpen ? 'flex' : 'hidden'"
              class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0" >
              <a class="text-transparent bg-clip-text hover:text-green-400"
                  href="/" style="color: white">Home</a>
              <a class="text-transparent bg-clip-text text-white
              hover:text-green-400"
                  href="{{ route('categories.index') }}">Categories</a>
              <a class="text-transparent bg-clip-text text-white
              hover:text-green-400"
                  href="{{ route('menus.index') }}">Our Menu</a>
                  {{-- <a class="text-transparent bg-clip-text text-white
              hover:text-green-400"
                  href="{{ route('orders1.index') }}">Orders</a> --}}

          
                  
                  @if (Auth::check())
                  <a class="text-transparent bg-clip-text text-white
                  text-white
                  hover:text-green-400"
                      href="{{ route('reservations.step.one') }}">Make Reservation</a>
                  <li><a class="text-transparent bg-clip-text text-white
              text-white
              hover:text-green-400" href="{{ ('user') }}">{{Auth::user()->name}}</a></li>
        
                  @if (\Auth::user()->is_admin == true)
                  <li><a class="text-transparent bg-clip-text text-white
              text-white
              hover:text-green-400" href="{{ route('admin.index') }}">Dashboard</a></li>
                  @endif
                
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                  <li><a class="text-transparent bg-clip-text text-white
              text-white
              hover:text-green-400" href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();" style="color: white">log Out</a></li>
                  </form>
        
                  @else
                  <li><a class="text-transparent bg-clip-text text-white
              text-white
              hover:text-green-400" href="{{ route('register') }}">Sign Up</a></li>
                  <li><a class="text-transparent bg-clip-text text-white
              text-white
              hover:text-green-400" href="{{ route('login') }}">Login</a></li>
                @endif
             
          </div>
      </nav>
  </div>
  <div class="font-sans text-gray-900 antialiased min-h-screen">
      {{ $slot }}
  </div>
  {{-- <footer class="bg-gray-800 border-t border-gray-200">
      <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
          <div class="flex flex-wrap justify-center">
              <ul class="flex items-center space-x-4 text-white">
                  <li>Home</li>
                  <li>About</li>
                  <li>Contact</li>
                  <li>Terms</li>
              </ul>
          </div>
          <div class="flex justify-center mt-4 lg:mt-0">
              <a>
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
              </a>
              <a class="ml-3">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
                      <path
                          d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                      </path>
                  </svg>
              </a>
              <a class="ml-3">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
              </a> --}}
              {{-- <a class="ml-3">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
                      <path stroke="none"
                          d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                      </path>
                      <circle cx="4" cy="4" r="2" stroke="none"></circle>
                  </svg>
              </a>
          </div>
      </div>
  </footer> --}}
</body>
</html>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


   <!-- Favicons -->
   <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
{{-- 
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <img src="{{ asset('assets/img/logo.jpg') }}" style="width:60px;height:60px;">
      <h1 class="logo me-auto me-lg-0"><a href="index.html">GRILLRILLA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('categories.index') }}">Categories</a></li>
          <li><a class="nav-link scrollto" href="{{ route('menus.index') }}">Menu</a></li>
          <li><a class="nav-link scrollto" href="{{ route('reservations.step.one') }}">Reservations</a></li>
          
          @if (Auth::check())
          <li><a class="nav-link scrollto" href="#events">{{Auth::user()->name}}</a></li>

          @if (\Auth::user()->is_admin == true)
          <li><a class="nav-link scrollto" href="{{ route('admin.index') }}">Dashboard</a></li>
          @endif
        
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <li><a class="nav-link scrollto" :href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();" style="color: white">log Out</a></li>
          </form>

          @else
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Sign Up</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
        @endif
     
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

    </div>
  </header><!-- End Header --> --}}



<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

     Fonts -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>


    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info" style="margin-left:30px;">
              <h3>GRILLRILLA</h3>
              <p>
                Salt <br>
               Jordan<br><br>
                <strong>Phone:</strong> +9627777777<br>
                <strong>Email:</strong> grillrilla@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('menus.index') }}
">Our Menu</a></li>
            
          
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('reservations.step.one') }}">Reservation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('categories.index') }}
">Category</a></li>
            </ul>
          </div>

         

        </div>
      </div>
    </div>

 <div class="container">
      <div class="copyright">
       2022 &copy; Copyright <strong><span>GRILLRILLA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
       
      </div>
    </div> 
  </footer><!-- End Footer -->

</body>

</html>
