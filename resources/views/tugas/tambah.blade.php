<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>
    <div class="container mt-3">
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input class="form-control" type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input class="form-control" type="datetime" name="Tanggal" required="required"> <br/>
		Nama Tugas <input class="form-control" type="text" name="NamaTugas" required="required"> <br/>
		Status <input class="form-control" type="text" name="Status" required="required" maxlength="1"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    </div>

</body>
</html>
