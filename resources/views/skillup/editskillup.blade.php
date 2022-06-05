@extends('layout.afterlogin')

@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" >Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about" class="active">Skill Up</a></li>
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
                    <p style="font-size: 35px; font-family: 'Poppins', sans-serif; margin-top: 90px; color: #ffff"> Masukkan Topik</p>
                </div>
                </div>

                <div class="row" style="margin-left: -210px">
                    <div class="col-6">
                        <form action="/applist/cari" method="GET">
                        <div class="form-group has-search center float-right">
                        <input type="text" class="form-control" placeholder="Search for Position..." name="cari" value="{{ old('cari') }}">
                        </div>
                    </div>
                    <div class="col-2" >
                        <div class="gradient-button">
                            <a  type="submit" value="CARI">Search</a>
                        </div>
                    </form>

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

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h2>Topik</h2>
            <div class="gradient-button mt-3">
                <a href="/applist">Back</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-2"></div>
          <div class="col-8 justify-content-center">
              @foreach ($skillup as $s )
            <form action="/skillup/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $s->id }}"> <br/>
                <div class="form-group">
                  <label for="logo">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo" placeholder="Logo" value="{{ $s->logo }}" required>
                      </div>              
                   <div class="form-group">
                    <label for="topik">Topic</label>
                    <input type="text" class="form-control" id="topik" name="topik" aria-describedby="emailHelp" placeholder="Topic" value="{{ $s->topik }}" required>
                  </div>
                <div class="form-group">
                    <label for="penyelenggara">Organizer</label>
                    <input id="autoresizing" type="text" class="form-control" id="penyelenggara" name="penyelenggara" aria-describedby="emailHelp" placeholder="Organizer" value="{{ $s->penyelenggara}}" required>
                  </div>
                <div class="form-group">
                    <label for="pembicara">Speakers</label>
                    <input id="autoresizing" type="text" class="form-control" id="pembicara" name="pembicara" aria-describedby="emailHelp" placeholder="Speakers" value="{{ $s->pembicara }}" required>
                  </div>
                <div class="form-group">
                    <label for="pembicara">Link</label>
                    <input id="autoresizing" type="text" class="form-control" id="link_video" name="link_video" aria-describedby="emailHelp" placeholder="Speakers" value="{{ $s->link_video }}" required>
                  </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    @endforeach
                    </div>

                </div>
          </div>
          <div class="col-2"></div>

      </div>
    </div>
  </div>

@endsection
