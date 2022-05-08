<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<div class="container mt-5">
        <h3>Data Pegawai</h3>

	<a href="/applist"> Kembali</a>

	<br/>
	<br/>

	<form action="/applist/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="perusahaan" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Alamat <textarea name="tentang_lowongan" required="required"></textarea> <br/>
		Alamat <textarea name="persyaratan" required="required"></textarea> <br/>
        Umur <input type="number" name="gaji" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
            <button type="submit" class="btn btn-primary mt-3">Post</button>


  </div>

</body>
</html>
