@extends('layout.template')
@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <p style="font-size: 35px; font-family: 'Poppins', sans-serif; margin-top: 90px; color: #ffff">Dream Jobs, Top Talent.<br> All in One Place </p>
                  </div>
                </div>
              </div>
            </div>
            <form action="/applist/cari" method="GET">
                <div class="row carousel-caption carousel-captions" style="margin-top:150px">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group has-search center float-right" style="width: 78%">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control buttonradius" placeholder="Cari" name="cari" value="{{ old('cari') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                            <button class="button buttonmasuk buttonradius" style="margin-top: 9px; margin-left:-90px" type="submit" value="CARI">Cari</button>
                    </div>

                </div>
            </form>

            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/Go startup HMSI.png"alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
