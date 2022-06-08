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
    <div class="container" style="">
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
                <th>CV</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
            @foreach($gambar as $g)

            <tr>
                <td>{{ $g->name}}</td>
                <td>{{ $g->email }}</td>
                <td><a href="{{asset('/data_file/'.$g->file) }}">View</a></td>
                <td>{{ $g->keterangan }}</td>
                <td>
                    <a href="mailto:{{$g->email}}?subject=Congratulation!&body=You have been accepted to our company. Please contact us on (031) 5023341" style="color: rgb(14, 197, 30)">Accept</a>
                    <a href="mailto:{{$g->email}}?subject=Result of Your Applicant&body=Sorry, your CV and portfolio not match with our requirement. Keep doing great things and never surrender" style="color: rgb(194, 15, 15)">Decline</a>
                </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
  @endsection
