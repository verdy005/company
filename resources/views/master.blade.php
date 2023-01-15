<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pricing - Company Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::asset('img/favicon.png')}}" rel="icon">
  <link href="{{URL::asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{url('/')}}" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->





        






      @yield('content')
        









        
     </div>
      </div>
    </section>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('vendor/aos/aos.js')}}"></script>
  <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL::asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{URL::asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{URL::asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::asset('js/main.js')}}"></script>

</body>

</html>