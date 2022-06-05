@extends('layout.afterlogin')

@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist">Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about" class="active">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')
  <div id="services" class="services" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h2>Rekomendasi</h2>
            <div class="gradient-button mt-3">
                <a href="/skillup">Kembali</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-2"></div>
          <div class="col-8 justify-content-center">
            <form action="/skillup/store" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo" placeholder="Logo" required>
                      </div>
                    <label for="topik">Topic</label>
                    <input type="text" class="form-control" id="topik" name="topik" placeholder="Topic" required>
                  </div>
                <div class="form-group">
                    <label for="penyelenggara">Organizer</label>
                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" placeholder="Organizer" required>
                  </div>
                <div class="form-group">
                    <label for="pembicara">Speakers</label>
                    <input type="text" class="form-control" id="pembicara" name="pembicara" placeholder="Speakers" required>
                  </div>
                  <div class="form-group">
                    <label for="link_video">Link</label>
                    <input type="text" class="form-control" id="link_video" name="link_video" placeholder="Link" required>
                  </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-6">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </form>
                    </div>

                </div>
          </div>
          <div class="col-2"></div>
      </div>
    </div>
  </div>
@endsection
