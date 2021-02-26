<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('tab-title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  @yield('link')

  <!-- =======================================================
  * Template Name: Arsha - v3.0.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">PPD</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('/') }}">{{ trans('message.Home') }}</a></li>
          
          <li class="drop-down"><a href="About_Us">{{ trans('message.About') }}</a>
            <ul>
              <li><a href="{{ url('/mission_vision') }}">{{ trans('message.Mission & Vision Statement') }}</a></li>
              <li><a href="{{ url('/functions') }}">{{ trans('message.Functions') }}</a></li>
              <li><a href="{{ url('/who_is_ppd') }}">{{ trans('message.Who is who in PPD') }}</a></li>
              <li><a href="{{ url('/career_opportunity') }}">{{ trans('message.Career Opportunities') }}</a></li>
            </ul>    
          </li>

          <li class="drop-down"><a href="">{{ trans('message.Tenders') }}</a>
            <ul>
              <li><a href="Portfolio_Details.html">{{ trans('message.Opportunities') }}</a></li>
              <li><a href="Contract_Awarded .html">{{ trans('message.Contract Awarded') }}</a></li>
            </ul>
          </li>

          <li class="drop-down"><a href="">{{ trans('message.Suppliers') }}</a>
            <ul>
              <li><a href="List_of_suppliers.html">{{ trans('message.List of suppliers') }}</a></li>
              <li><a href="Complaint_Mechanism.html">{{ trans('message.Complaint Mechanism') }}</a></li>
            </ul>
          </li>

          <li class="drop-down"><a href="">{{ trans('message.Events') }}</a>
            <ul>
              <li><a href="#">{{ trans('message.Workshop') }}</a></li>
              <li><a href="#">{{ trans('message.Training') }}</a></li>
              <li><a href="#">{{ trans('message.Other activities') }}</a></li>
              <li><a href="#">{{ trans('message.Training Materials (PPT etc…)') }}</a></li>          
            </ul>  
          </li>

          <li ><a href="{{ url('/legal') }}">{{ trans('message.Legal') }}</a></li>
          {{-- <li class="drop-down"><a href="">{{ trans('message.Legal Framework') }}</a>
            <ul>
              <li><a href="#">{{ trans('message.Law') }}</a></li>
              <li><a href="#">{{ trans('message.Instruction') }}</a></li>
              <li><a href="#">{{ trans('message.Other') }}</a></li>
            </ul>
          </li> --}}

          <li ><a href="{{ url('/key_documents') }}">{{ trans('message.Keys Documents') }}</a></li>
          {{-- <li class="drop-down"><a href="/key_documents">{{ trans('message.Keys Documents') }}</a>
            <ul>
              <li><a href="#">{{ trans('message.Procurement Manual') }}</a></li>
              <li><a href="#">{{ trans('message.Standard Bidding Documents') }}</a></li>
              <li><a href="#">{{ trans('message.Procurement checklist') }}</a></li>
              <li><a href="#">{{ trans('message.Request for Proposal (consultant Services)') }}</a></li>
              <li><a href="#">{{ trans('message.Evaluation Report') }}</a></li>
              <li><a href="#">{{ trans('message.Templates') }}</a></li>
              <li><a href="#">{{ trans('message.Complaints filing procedure') }}</a></li>
              <li><a href="#">{{ trans('message.Other links') }}</a></li>
            </ul> 
          </li> --}}
          
          <li ><a href="{{ url('/agencies') }}">{{ trans('message.Agencies') }}</a></li>
          
          <li class="drop-down"><a href="#">{{ trans('message.Language') }}</a>
            <ul>
              <li><a href="{{ URL::to('change/en') }}"><img src="https://cdn.countryflags.com/thumbs/united-kingdom/flag-round-250.png" width="30"> English</a></li>
              <li><a href="{{ URL::to('change/lo') }}"><img src="https://cdn.countryflags.com/thumbs/laos/flag-round-250.png" width="30"> ພາສາລາວ</a></li>
            </ul>
          </li>
          
          <a class="disabled" id="dropdownLang" data-toggle="dropdown">
            {{ Config::get('app.locale') }}
            <span class="caret"></span>
          </a>
          
          <li ><a href="">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">{{ trans('message.Manage') }}</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            @endif
          </li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <h2>@yield('title')</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      @yield('content_no_container')
      <div class="container">
        <div class="portfolio-description">
          @yield('content')
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>MOF LAOS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">IFID</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @yield('script')
</body>

</html>
