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
                    <p style="font-size: 60px; font-family: 'Poppins', sans-serif; margin-top: 90px; color: #ffff">INPUT</p>
                    <p style="font-size: 60px; font-family: 'Poppins', sans-serif; color: #ffff">APPLICANT</p>
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

  <div id="services">
    <div class="container mt-5">
        <div class="input-field">
            <label for="company">Company</label>
              <input id="company" type="text" class="form-control @error('email') is-invalid @enderror" name="company" value="{{ old('company') }}" required autofocus>
        </div>
        <div class="input-field">
            <label for="company">Company</label>
              <input id="company" type="text" class="form-control @error('email') is-invalid @enderror" name="company" value="{{ old('company') }}" required autofocus>
        </div>
        <div class="input-field">
            <label for="company">Company</label>
              <input id="company" type="text" class="form-control @error('email') is-invalid @enderror" name="company" value="{{ old('company') }}" required autofocus>
        </div>
        <div class="input-field">
            <label for="company">Company</label>
              <input id="company" type="text" class="form-control @error('email') is-invalid @enderror" name="company" value="{{ old('company') }}" required autofocus>
        </div>
        <div class="input-field">
            <label for="company">Company</label>
              <input id="company" type="text" class="form-control @error('email') is-invalid @enderror" name="company" value="{{ old('company') }}" required autofocus>
        </div>
  </div>
  <div class="btn btn-primary create-appl text-center">
    <button type="submit" class="btn btn-primary">
        {{ __('Register') }}
</div>

@endsection
