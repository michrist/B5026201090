<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->idpegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="Tanggal" value="{{ $p->tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="NamaTugas" value="{{ $p->namatugas }}"> <br/>
		Status <input type="text" required="required" name="Status" value="{{$p->status }}">  <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
