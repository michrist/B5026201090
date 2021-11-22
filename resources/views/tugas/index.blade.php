<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<style>
    body{
        background-image: url(images/background2.jpg);
    }
    a:
</style>
<body>
    <div class="container mt-3">
	<h1>Data Tugas</h1>

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1" class="table table-dark table-striped">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->idpegawai }}</td>
			<td>{{ $p->tanggal  }}</td>
			<td>{{ $p->namatugas }}</td>
			<td>{{ $p->status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>
    </div>

</body>
</html>
