<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>
    <div class="container mt-3">
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		ID Pegawai <input class="form-control" type="number" required="required" name="IDPegawai" value="{{ $p->idpegawai }}"> <br/>
		Tanggal <input class="form-control" type="datetime" required="required" name="Tanggal" value="{{ $p->tanggal }}"> <br/>
		Nama Tugas <input class="form-control" type="text" required="required" name="NamaTugas" value="{{ $p->namatugas }}"> <br/>
		Status <input class="form-control" type="text" required="required" name="Status" value="{{$p->status }}">  <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    </div>


</body>
</html>
