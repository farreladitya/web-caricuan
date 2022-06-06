@extends('layout.afterlogin')
@section('navbar')
              <li class="scroll-to-section"><a href="/home">Home</a></li>
              <li class="scroll-to-section"><a href="/applist" class="active">Applicant List</a></li>
              <li class="scroll-to-section"><a href="#about">Skill Up</a></li>
              <li class="scroll-to-section"><a href="#pricing">Find Job</a></li>
@endsection

@section('content')	
			<div class="mx-auto my-5" >

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
				<div class="whitespace" style="color:#fff;font-size : 70px;">
					<br>
				</div>
				<div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h1 class="d-flex justify-content-center">UPLOAD<em> CV</em></h1>
          </div>
</div>
		<div class="row">
			<div class="col-2 my-auto">
				<img src="{{URL::asset('assets/images/services-left-dec.png')}}">
			</div>
			<div class="col-8">
			<div>
				<form action="/uploadfindjob/proses"  method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<b>Image File</b><br/>
						<input type="file" name="file" class="mt-2">
					</div>

					<div class="form-group">
						<b>Description</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
</div>
			</div>
			<div class="col-2">
			</div>
		</div>
				<div class="row">
					<div class="col-2">
					</div>
					<div class="col-8">
					<h4 class="my-5">Data</h4>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th width="1%">File</th>
			<th>Description</th>
			<th width="1%">Option</th>
		</tr>
	</thead>
	<tbody>
		@foreach($gambar as $g)
		<tr>
			<td><a href="{{asset('/data_file/'.$g->file) }}">View</a></td>
			<td>{{$g->keterangan}}</td>
			<td><a class="btn btn-danger" href="/uploadfindjob/hapus/{{ $g->id }}">HAPUS</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
					</div>
					<div class="col-2">
					</div>
				</div>
				
			@endsection
