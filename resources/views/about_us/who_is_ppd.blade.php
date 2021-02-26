@extends('layouts.theme')

@section('tab-title')
    @lang('message.Who is who in PPD')
@endsection

@section('title')
    <center>@lang('message.Who is who in PPD')</center>
@endsection

@section('content_no_container')
  <!-- ======= Team Section ======= -->
  <section id="team" class="team section">
    <div class="container" data-aos="fade-up">
      <div class="row">

        <div class="col-lg-12">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="d-flex justify-content-center">
                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              </div>
              <div class="d-flex justify-content-center mt-1">
                    <h1 style="color: #37517e">Walter White</h1>
              </div>
              <div class="d-flex justify-content-center">
                <p>Chief Executive Officer</p>
              </div>
            
                
          </div>
        </div>

        <div class="col-lg-6 mt-4 ">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex justify-content-center">
                    <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="d-flex justify-content-center mt-1">
                      <h3 style="color: #37517e">Sarah Jhonson</h3>
                </div>
                <div class="d-flex justify-content-center">
                  <p>Product Manager</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4 ">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex justify-content-center">
                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="d-flex justify-content-center mt-1">
                      <h3 style="color: #37517e">William Anderson</h3>
                </div>
                <div class="d-flex justify-content-center">
                  <p>CTO</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
              </div>
            </div>
          </div>

      </div>

    </div>
  </section><!-- End Team Section -->
@endsection