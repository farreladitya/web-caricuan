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
                    <p style="font-size: 35px; font-family: 'Poppins', sans-serif; margin-top: 90px; color: #ffff"> Input Vacancies</p>
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
                <img src="{{asset("assets/images/listt.png")}}" alt="">
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
            <h2>Vacancies</h2>
            <div class="gradient-button mt-3">
                <a href="/applist">Back</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-2"></div>
          <div class="col-8 justify-content-center">
            <form action="/applist/store" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Company</label>
                    <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Company" required>
                  </div>
                <div class="form-group">
                    <label for="jabatan">Position</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" aria-describedby="emailHelp" placeholder="Position" required>
                  </div>
                <div class="form-group">
                    <label for="lokasi">Location</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" aria-describedby="emailHelp" placeholder="Location" required>
                  </div>
                <div class="form-group">
                    <label for="gaji">Salary</label>
                    <input type="text" class="form-control" id="gaji" name="gaji" aria-describedby="emailHelp" placeholder="Salary" required>
                  </div>
                <div class="form-group">
                    <label for="tentang_lowongan">About</label>
                    <textarea id="autoresizing" type="text" class="form-control" id="tentang_lowongan" name="tentang_lowongan" aria-describedby="emailHelp" placeholder="About" required></textarea>
                  </div>
                <div class="form-group">
                    <label for="persyaratan">Requirements</label>
                    <textarea id="autoresizing" type="text" class="form-control" id="persyaratan" name="persyaratan" aria-describedby="emailHelp" placeholder="Requirements" required></textarea>
                  </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>

                </div>
          </div>
          <div class="col-2"></div>

      </div>
    </div>
  </div>

@endsection
