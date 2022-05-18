@extends('layout.afterlogin')
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
                <img src="assets/images/Go startup HMSI1.png"alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="content" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row" >
            <div class="gradient-button mt-3 mb-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" style="left: 500px" >
                <a href="/applist/tambah"> Create new job vacancy</a>
            </div>
            <div class="row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" style="left: 500px" >
                <div class="grey-box">
                @foreach($lowongan as $p)
                <div class="job-name">
                    {{ $p->jabatan }}, {{ $p->perusahaan }}
                </div>
                <div class="job-location">
                    {{ $p->lokasi }}
                </div>

                @endforeach
                <a href="/applist/detail" class="viewapp-btn viewapp-text">View Applicant</a>
            </div>
        </div>


        {{-- <table class="table">
            <tr class="text-center">
                <th>Company</th>
                <th>Position</th>
                <th>Location</th>
                <th>About</th>
                <th>Requirement</th>
                <th>Salary</th>
                <th>Opsi</th>
            </tr>

            <tr>
                <td>{{ $p->perusahaan }}</td>
                <td>{{ $p->jabatan }}</td>
                <td>{{ $p->lokasi }}</td>
                <td>{{ $p->tentang_lowongan }}</td>
                <td>{{ $p->persyaratan }}</td>
                <td>{{ $p->gaji }}</td>
                <td>
                    <a href="/applist/edit/{{ $p->id }}">Edit</a>
                    |
                    <a href="/applist/hapus/{{ $p->id }}">Delete</a>
                </td>
            </tr>

        </table> --}}
      </div>
    </div>
  </div>

@endsection
