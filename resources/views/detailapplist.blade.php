@extends('layout.afterlogin')
@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" class="active">Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')

<div class="white-box">
    <br><br>
</div>

<div class="wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        {{-- @foreach($lowongan as $p)
        <h2>About</h2>
        <p> {{$p->tentang_lowongan}}</p>

        @endforeach --}}
        @foreach ($lowongan as $p)
        <form action="/applist/detail" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
            <div class="form-group mb-3">
                {{-- <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Company" value="{{ $p->perusahaan }}" readonly> --}}
                <h2 style="font-weight: bold" class="mb-1">{{ $p->perusahaan }}</h2>
                <h4>{{ $p->jabatan }}</h4>
              </div>
              <div class="form-group">
                <label for="tentang_lowongan">About</label>
                <textarea class="form-control" id="textBox1" name="content" TextMode="MultiLine" onkeyup="setHeight('textBox1');" onkeydown="setHeight('textBox1');" readonly>{{ $p->tentang_lowongan }}</textarea>
              </div>
              <div class="form-group">
                <label for="persyaratan">Requirements</label>
                <textarea class="form-control" id="textBox1" name="content" TextMode="MultiLine" onkeyup="setHeight('textBox1');" onkeydown="setHeight('textBox1');" readonly>{{ $p->persyaratan }}</textarea>
              </div>
            <div class="form-group">
                <label for="lokasi">Location</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" aria-describedby="emailHelp" placeholder="Location" value="{{ $p->lokasi }}" readonly>
              </div>
            <div class="form-group">
                <label for="gaji">Salary</label>
                <input type="text" class="form-control" id="gaji" name="gaji" aria-describedby="emailHelp" placeholder="Salary" value="{{ $p->gaji }}" readonly>
              </div>
            <div class="row">
                <div class="form-group">
                    <div class="grey-box mt-5">
                        <a href="/applist/edit/{{ $p->id }}"class="edit-btn viewapp-text">Edit</a>
                        <a href="/applist/hapus/{{ $p->id }}"class="delete-btn viewapp-text">Delete</a>
                    </div>
                      </div>
                </form>
                @endforeach
  </div>


  {{-- BUAT DETAIL USER --}}
  {{-- <div class="grey-box mt-5">
    <div class="int-detail">
        Interested with this vacancy?
    </div>
    <button href="/applist" class="button viewapp-btn viewapp-text">Apply Now</button>
</div> --}}
</div>

@endsection
