@extends('layout.afterlogin')

@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" >Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about" class="active">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')

{{-- <div class="white-box">
    <br><br>
</div> --}}

<div id="services" class="services section">
    <div class="container" style="">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h1>Skillup<em> List</em></h1>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <table class="table">
            <tr>
                <th>Topic</th>
                <th>Organizer</th>
                <th>Speakers</th>
                <th>Link Video</th>
            </tr>
            @foreach($skillup as $s)
            <tr>
                <td>{{ $s->topik }}</td>
                <td>{{ $s->penyelenggara}}</td>
                <td>{{ $s->pembicara}}</td>
                <td>{{ $s->link_video}}</td>
                <td>
                    <a href="/skillup/edit/{{ $s->id }}" style="color: rgb(14, 197, 30)">Accept</a>
                    <a href="/skillup/edit/{{ $s->id }}" style="color: rgb(194, 15, 15)">Decline</a>
                </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
  @endsection
