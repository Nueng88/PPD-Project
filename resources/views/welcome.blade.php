<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPD LAOS</title>
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

  <!-- =======================================================
  * Template Name: Arsha - v3.0.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
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
              <li><a href="{{ url('/list_of_suppliers') }}">{{ trans('message.List of suppliers') }}</a></li>
              <li><a href="{{ url('/Complaint_Mechanism') }}">{{ trans('message.Complaint Mechanism') }}</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Welcome to the Public Procurement Department (PPD)</h1>
          <h2>The PPD is established by the Public Procurement Act, XXX as a regulatory body responsible for:</h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.mof.gov.la/wp-content/uploads/2021/02/6c385788-f224-4621-9aba-de8e002cae85-1024x762.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.mof.gov.la/wp-content/uploads/2021/02/df8a4231-54a6-4079-ad85-f92100e35208-1024x627.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.mof.gov.la/wp-content/uploads/2018/11/2-1024x682.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">1000 Number of Procurement</th>
                <th scope="col">1500 Number of contracts</th>
                <th scope="col">1000 Number of suppliers</th>
              </tr>
            </thead>

          </table>



        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

  <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ຂ່າວສານ</h2>
          <p></p>
        </div>

        <div class="row">

        @foreach($news as $newsItem)
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic">{{ $newsItem->image}}</div>
              <div class="member-info">
                <h4>{{ $newsItem->title}}</h4>
                <span><td>{{ $newsItem->date}}</td></span>
                <p><td>{{ $newsItem->content}}</td></p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          @endforeach


        </div>

      </div>
    </section><!-- End Team Section -->


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

</body>

</html>
