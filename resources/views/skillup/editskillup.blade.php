@extends('layout.afterlogin')

@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="#about" class="active">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')
  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Edit <em>The</em> Data</h4>
            <div class="gradient-button mt-3">
                <a href="/skillup/view">Back</a>
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
