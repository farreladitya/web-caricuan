@extends('layout.tempskillup')
@section('content')
<div class="bg-skillup">
</div>
<div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4 style="margin-top: -135px">We <em>Recommend</em> You</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Based on your background and skill, we recommend you some videos.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 mx-4">
          <div class="service-item first-service">
            <img src="assets/images/xl.png" style="width: 28%; height: 28%" alt="">
            <p>Plan My Future helps you to identify your interests, talents and skills that will be useful in the world of work</p>
          </div>
        </div>
        <div class="col-lg-3 mx-4">
          <div class="service-item second-service">
            <img src="assets/images/xl.png" style="width: 28%; height: 28%" alt="">
            <p>Plan My Future provides psychological questions that have been tested in various psychological tests in Indonesia</p>
          </div>
        </div>
        <div class="col-lg-3 mx-4">
          <div class="service-item third-service">
            <img src="assets/images/xl.png" style="width: 28%; height: 28%" alt="">
            <p>Plan My Future provides psychological test results in less than a week</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <div class="row">
              <div class="col-2 my-auto">
                <img src="assets/images/xl.png" style="width: 65px; height: 65px" alt="">
              </div>
              <div class="col-6">
                <span class="fw-bold" style="font-size: 25px">Digital
                  Entrepreneurship 
                  Academy Training</span>
              </div>
            </div>
            {{-- <img src="assets/images/heading-line-dec.png" alt=""> --}}
            <p>Pelatihan Bimbingan Teknis Digital Entrepreneurship Academy (Offline) merupakan rangkaian program Digital Talent Scholarship yang dilaksanakan Badan Penelitian dan Pengembangan SDM Kementerian Komunikasi dan Informatika pada tahun 2020. 
            </p>
          </div>
          <div class="row">
            {{-- <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">With the Best Mentor</a></h4>
                <p>Certified Mentors</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Video Access</a></h4>
                <p>Everywhere & Anytime</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Create Schedule</a></h4>
                <p>Customize your Schedule</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Latest Video</a></h4>
                <p>Everyday</p>
              </div>
            </div> --}}
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section-heading">
      <h4 class="text-center my-5">It's <em>Available</em> Now!</h4>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-3 mx-4">
        <div class="service-item first-service">
          <img src="assets/images/xl.png" style="width: 28%; height: 28%" alt="">
          <p>Plan My Future helps you to identify your interests, talents and skills that will be useful in the world of work</p>
        </div>
      </div>
      <div class="col-lg-3 mx-4">
        <div class="service-item second-service">
          <img src="assets/images/xl.png" style="width: 28%; height: 28%" alt="">
          <p>Plan My Future provides psychological questions that have been tested in various psychological tests in Indonesia</p>
        </div>
      </div>
      <div class="col-lg-3 mx-4">
        <div class="service-item third-service">
          <img src="assets/images/xl.png" style="width: 28%; height: 28%" alt="">
          <p>Plan My Future provides psychological test results in less than a week</p>
        </div>
      </div>
    </div>
  </div>
@endsection
