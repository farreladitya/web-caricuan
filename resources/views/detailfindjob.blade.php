@extends('layout.afterlogin')
@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" class="active">Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12" style="margin-left: -100px">
                    <p style="font-size: 35px; font-family: 'Poppins', sans-serif; margin-top: 90px; color: #ffff"> Dream Jobs, Top Talent.<br> All in One Place </p>
                </div>
                </div>


              </div>
            </div>


            <div class="col-lg-6" style="margin-right: -200px" >
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset("assets/images/Go startup HMSI1.png")}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="white-box">
    <br><br>
</div>

<div class="wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        {{-- @foreach($lowongan as $p)
        <h2>About</h2>
        <p> {{$p->tentang_lowongan}}</p>

        @endforeach --}}
        @foreach ($lowongan as $p)
        <form action="/findjob/detail" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
            <div class="form-group mb-3">
                {{-- <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Company" value="{{ $p->perusahaan }}" readonly> --}}
                <h2 style="font-weight: bold" class="mb-1">{{ $p->perusahaan }}</h2>
                <h4>{{ $p->jabatan }}</h4>
              </div>
              <div class="form-group">
                <label for="tentang_lowongan">About</label>
                <textarea id="autoresizing" class="form-control" readonly>{{ $p->tentang_lowongan }}</textarea>
              </div>
              <div class="form-group">
                <label for="persyaratan">Requirements</label>
                <textarea id="autoresizing" class="form-control" readonly>{{ $p->persyaratan }}</textarea>
              </div>
            <div class="form-group">
                <label for="lokasi">Location</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" aria-describedby="emailHelp" placeholder="Location" value="{{ $p->lokasi }}" readonly>
              </div>
            <div class="form-group">
                <label for="gaji">Salary</label>
                <input type="text" class="form-control" id="gaji" name="gaji" aria-describedby="emailHelp" placeholder="Salary" value="{{ $p->gaji }}" readonly>
              </div>
            <div class="row">
                <div class="form-group">
                    <div class="grey-box mt-5">
                        <a href="/applist/edit/{{ $p->id }}"class="button edit-btn viewapp-text">Edit</a>
                        <a href="/applist/hapus/{{ $p->id }}"class="button delete-btn viewapp-text">Delete</a>
                    </div>
                      </div>
                </form>
                @endforeach
  </div>


  {{-- BUAT DETAIL USER --}}
  {{-- <div class="grey-box mt-5">
    <div class="int-detail">
        Interested with this vacancy?
    </div>
    <button href="/applist" class="button viewapp-btn viewapp-text">Apply Now</button>
</div> --}}
</div>

@endsection
