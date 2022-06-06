@extends('layout.tempskillup')
@section('content')

@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
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
                
              <p>Based on your background and skill, we recommend you some videos.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row d-flex justify-content-center">
        @foreach ($skillup as $s)
        <div class="col-lg-3 mx-4">
          <div class="service-item first-service">
            <img src="{{URL::asset('assets/images/ppkd.png')}}" style="width: 28%; height: 28%; display:block; margin-left: auto; margin-right:auto" alt="" >
            <p class="kotak"> <b>Topic:</b>
              <br>
              {{$s->topik}} <br> <b>Organizer:</b>  <br> {{$s->penyelenggara}} <br> <b>Speakers: </b> <br> {{$s->pembicara}}
            </p>
              <div class="d-flex justify-content-center">
              <a  class="btn btn-1 video-play-btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
            </div>
            <div class="video-popup">
              <div class="video-popup-inner">
                <a href="/skillup"><i class="fas fa-times video-popup-close"></i></a>
                <div class=" iframe-box">
                  <iframe
                    id="player-1"
                    src="{{$s->link_video}}"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
            </div>
          </div>
          @endforeach
        </div>
      
    </div>

    <div id="about" style="margin-left: 170px; margin-top:135px; margin-bottom:135px">
      {{-- <div class="container"> --}}
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="section-heading">
              <div class="row mt-3">
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
              <div class="row">
                <div class="col-7">
                <p class="kotak" >Pelatihan Bimbingan Teknis Digital Entrepreneurship Academy (Offline) merupakan rangkaian program Digital Talent Scholarship yang dilaksanakan Badan Penelitian dan Pengembangan SDM Kementerian Komunikasi dan Informatika pada tahun 2020.
                </p>
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/GCNJTx5Ij3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    <div class="row d-flex justify-content-center">
      @foreach ($skillup2 as $s)
      <div class="col-lg-3 mx-4">
        <div class="service-item first-service">
          <img src="{{URL::asset('assets/images/ppkd.png')}}" style="width: 28%; height: 28%; display:block; margin-left: auto; margin-right:auto" alt="" >
          <p class="kotak"> <b>Topic:</b>
            <br>
            {{$s->topik}} <br> <b>Organizer:</b>  <br> {{$s->penyelenggara}} <br> <b>Speakers: </b> <br> {{$s->pembicara}}
          </p>
            <div class="d-flex justify-content-center">
            <a href="{{$s->link_video}}" class="btn" style="background:#00E6E9; border-radius:25px"> Watch Now</a>
          </div>
          </div>
        </div>
        @endforeach
      </div>
    
  </div>
</div>

@endsection
