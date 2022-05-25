@extends('layout.afterlogin')
@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" class="active">Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')
        @foreach ($lowongan as $p)
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12" style="margin-left: -100px">
                    <p style="font-size: 75px; font-family: 'Poppins', sans-serif; margin-top: 90px; color: #ffff">  {{ $p->perusahaan }} <br> <br> 
                        <span style="font-size: 25px; font-family: 'Poppins', sans-serif; margin-top: 90px; color: #ffff; font-weight: 100;" class="text-center">{{ $p->jabatan }}</span>
                    </p>
                    
                    

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


<div class="wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        {{-- @foreach($lowongan as $p)
        <h2>About</h2>
        <p> {{$p->tentang_lowongan}}</p>

        @endforeach --}}
        <form action="/findjob/detail" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
            <div class="form-group">
                {{-- <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Company" value="{{ $p->perusahaan }}" readonly> --}}
              </div>
              
              <div class="grey-boxfj mb-3">
                <label for="tentang_lowongan" style="font-size: 30px; font-family: 'Poppins', sans-serif; color: rgb(3, 26, 61)"><u>ABOUT</u></label>
                <p>{{ $p->tentang_lowongan }}</p>
             </div>
             <div class="grey-boxfj mb-3">
                <label for="persyaratan" style="font-size: 30px; font-family: 'Poppins', sans-serif; color: rgb(3, 26, 61)"><u>REQUIREMENTS</u></label>
                <p>{{ $p->persyaratan }}</p>
            </div>


                <div class="row d-flex justify-content-center">
                    <div class="mt-5">
                        <div  class="apply-button" >
                            <a type="submit" value="APPLY">Apply CV</a>
                        </div>
                    </form>

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
