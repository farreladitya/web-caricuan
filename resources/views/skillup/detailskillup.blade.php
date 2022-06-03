@extends('layout.afterlogin')
@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" >Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about" class="active">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')

<div class="white-box">
    <br><br>
</div>

<div class="wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">

        @foreach ($skillup as $s)
        <form action="/skillup/detail" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->id }}"> <br/>
            <div class="form-group mb-3">
                <h2 style="font-weight: bold" class="mb-1">{{ $s->topik }}</h2>
                <h4>{{ $s->penyelenggara }}</h4>
              </div>
              <div class="form-group">
                <label for="logos">Logo</label>
                <input type="text" class="form-control" id="logos" name="logos" placeholder="Logo" value="{{ $s->logo }}" required>
              </div>                <div class="form-group">
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
                <label for="link_video">Link Video</label>
                <input id="autoresizing" type="text" class="form-control" id="link_video" name="link_video" aria-describedby="emailHelp" placeholder="Link Video" value="{{ $s->link_video }}" required>
              </div>
            <div class="row">
                <div class="form-group">
                    <div class="grey-box mt-5">
                        <a href="/skillup/edit/{{ $s->id }}"class="edit-btn viewapp-text">Edit</a>
                        <a href="/skillup/hapus/{{ $s->id }}"class="delete-btn viewapp-text">Delete</a>
                    </div>
                      </div>
                </form>
                @endforeach
  </div>
</div>

@endsection
