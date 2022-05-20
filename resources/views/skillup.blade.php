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
            <img src="{{URL::asset('assets/images/ppkd.png')}}" style="width: 28%; height: 28%; display:block; margin-left: auto; margin-right:auto" alt="" >
            <p>Topic:
              <br>
              Improving Our Public Speaking <br> Organizer: <br> PPKD Jakarta Pusat <br> Speakers: <br> Sunyoto Wirawan, S.T., M.T
            </p>
          </div>
        </div>
        <div class="col-lg-3 mx-4">
          <div class="service-item second-service">
            {{-- <img src="{{URL::asset('/assets/images/xl.png')}}" width="28%" height="28%" class="float-right"> --}}
            <img src="{{URL::asset('assets/images/brawijaya.png')}}" style="width: 28%; height: 28%; display:block; margin-left: auto; margin-right:auto" alt="">
            <p>Topic:
              <br>
              Improving Jurnalism Skills <br> Organizer: <br> Brawijaya University <br> Speakers: <br>Sanjaya Oktaviano, S.I.Kom.
            </p>
          </div>
        </div>
        <div class="col-lg-3 mx-4">
          <div class="service-item third-service">
            <img src="assets/images/karier.mu.png" style="width: 80%; height: 80%; display:block; margin-left: auto; margin-right:auto" alt="">
            <p>Topic:
              <br>
              Optimization of Communication Skills <br> Organizer: <br> Karier.mu <br> Speakers: <br>Stephanus Avata, S.I.Kom.
            </p>         
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div id="about" class="about-us section" style="margin-left: 320px">
    {{-- <div class="container"> --}}
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <div class="row">
              <div class="col-2 my-auto">
                <img src="assets/images/digital.png" style="width: 80px; height: 80px; display:block; margin-left: auto; margin-right:auto" alt="">
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
    <div class="row d-flex justify-content-center">
      <div class="col-lg-3 mx-4">
        <div class="service-item first-service">
          <img src="assets/images/ypia.png" style="width: 60%; height: 60%; display:block; margin-left: auto; margin-right:auto" alt="">
          <p>Topic:
            <br>
            Effective Report Writing for Internal Audit <br> Organizer: <br> PPIA <br> Speakers: <br>Dr. Ir. Mudjahidin, S.T., M.T
          </p>
        </div>
      </div>
      <div class="col-lg-3 mx-4">
        <div class="service-item second-service">
          {{-- <img src="{{URL::asset('/assets/images/xl.png')}}" width="28%" height="28%" class="float-right"> --}}
          <img src="assets/images/web.png" style="width: 30%; height: 30%; display:block; margin-left: auto; margin-right:autos " alt="">
          <p>Topic:
            <br>
            Learning and Teaching In Pandemi Era <br> Organizer: <br> Whiteboard Education<br> Speakers: <br>Eric Kunto Ariwibowo, M.Pd
          </p>
        </div>
      </div>
      <div class="col-lg-3 mx-4">
        <div class="service-item third-service">
          <img src="assets/images/karier.mu.png" style="width: 80%; height: 80%; display:block; margin-left: auto; margin-right:auto" alt="">
          <p>Topic:
            <br>
            Improving Your Excel Skills<br> Organizer: <br> Karier.mu <br> Speakers: <br>Alexander Amando Tanoesoedibjo
          </p>         
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
