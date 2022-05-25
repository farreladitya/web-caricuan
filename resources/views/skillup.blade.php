@extends('layout.tempskillup')
@section('content')

@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist">Applicant List</a></li>
              <li class="scroll-to-section"><a href="/skillup" class="active">Skill Up</a></li>
              <li class="scroll-to-section"><a href="/findjob">Find Job</a></li>
@endsection
<style>
   .kotak{
        color: #000;
    }
    .body{
      overflow: hidden;
    }
</style>
<div class="body">
  <div class="bg-skillup mb-5">
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
              <p class="kotak"> <b>Topic:</b>
                <br>
                Improving Our Public Speaking <br> <b>Organizer:</b>  <br> PPKD Jakarta Pusat <br> <b>Speakers: </b> <br> Sunyoto Wirawan, S.T., M.T
              </p>
              <div class="d-flex justify-content-center">
              <a href="" class="btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
            </div>
            </div>
          </div>
          <div class="col-lg-3 mx-4">
            <div class="service-item second-service">
              {{-- <img src="{{URL::asset('/assets/images/xl.png')}}" width="28%" height="28%" class="float-right"> --}}
              <img src="{{URL::asset('assets/images/brawijaya.png')}}" style="width: 28%; height: 28%; display:block; margin-left: auto; margin-right:auto" alt="">
              <p class="kotak"> <b>Topic:</b>
                <br>
                Improving Jurnalism Skills <br> <b>Organizer:</b>  <br> Brawijaya University <br> <b>Speakers:</b>  <br>Sanjaya Oktaviano, S.I.Kom.
              </p>
              <div class="d-flex justify-content-center">
                <a href="" class="btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mx-4">
            <div class="service-item third-service">
              <img src="assets/images/karier.mu.png" style="width: 80%; height: 80%; display:block; margin-left: auto; margin-right:auto" alt="">
              <p class="kotak"> <b>Topic:</b>
                <br>
                Optimization of Communication Skills <br> <b>Organizer:</b> <br> Karier.mu <br> <b>Speakers:</b>  <br>Stephanus Avata, S.I.Kom.
              </p>
              <div class="d-flex justify-content-center">
                <a href="" class="btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
              </div>
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
                  <span class="fw-bold " style="font-size: 25px">Digital
                    Entrepreneurship
                    Academy Training</span>
                </div>
              </div>
              {{-- <img src="assets/images/heading-line-dec.png" alt=""> --}}
              <p class="kotak" >Pelatihan Bimbingan Teknis Digital Entrepreneurship Academy (Offline) merupakan rangkaian program Digital Talent Scholarship yang dilaksanakan Badan Penelitian dan Pengembangan SDM Kementerian Komunikasi dan Informatika pada tahun 2020.
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
            <p class="kotak"> <b>Topic:</b>
              <br>
              Effective Report Writing for Internal Audit <br> <b>Organizer:</b> <br> PPIA <br> <b>Speakers:</b>  <br>Dr. Ir. Mudjahidin, S.T., M.T
            </p>
            <div class="d-flex justify-content-center">
              <a href="" class="btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mx-4">
          <div class="service-item second-service">
            {{-- <img src="{{URL::asset('/assets/images/xl.png')}}" width="28%" height="28%" class="float-right"> --}}
            <img src="assets/images/web.png" style="width: 30%; height: 30%; display:block; margin-left: auto; margin-right:autos " alt="">
            <p class="kotak"> <b>Topic:</b>
              <br>
              Learning and Teaching In Pandemi Era <br> <b>Organizer:</b> <br> Whiteboard Education<br> <b>Speakers:</b> <br>Eric Kunto Ariwibowo, M.Pd
            </p>
            <div class="d-flex justify-content-center">
              <a href="" class="btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mx-4">
          <div class="service-item third-service">
            <img src="assets/images/karier.mu.png" style="width: 80%; height: 80%; display:block; margin-left: auto; margin-right:auto" alt="">
            <p class="kotak"> <b>Topic:</b>
              <br>
              Improving Your Excel Skills<br>  <b>Organizer:</b> <br> Karier.mu <br> <b>Speakers:</b> <br>Alexander Amando Tanoesoedibjo
            </p>
            <div class="d-flex justify-content-center">
              <a href="" class="btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
