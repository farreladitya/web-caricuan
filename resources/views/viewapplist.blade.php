@extends('layout.afterlogin')

@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" class="active">Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')

{{-- <div class="white-box">
    <br><br>
</div> --}}

<div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h1>Applicant<em> List</em></h1>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>PMF Result</th>
                <th>CV</th>
                <th>Status</th>
            </tr>
            @foreach($lowongan as $p)
            <tr>
                <td>{{ $p->perusahaan }}</td>
                <td>{{ $p->jabatan }}</td>
                <td><a href="/applist/edit/{{ $p->id }}">View</a></td>
                <td>
                    <a href="/applist/edit/{{ $p->id }}">View</a>
                </td>
                <td>
                    <a href="/applist/edit/{{ $p->id }}" style="color: rgb(14, 197, 30)">Accept</a>
                    <a href="/applist/edit/{{ $p->id }}" style="color: rgb(194, 15, 15)">Decline</a>
                </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
  @endsection
