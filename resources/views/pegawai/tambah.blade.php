@extends('layout.ceria')

@section('title', 'Tambah Pegawai')
@section('judulhalaman', 'Tambah Data Pegawai')
@section('isikonten')
    <br>
	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input class="form-control mt-2" type="text" name="nama" required="required"> <br/>
		Jabatan <input class="form-control mt-2" type="text" name="jabatan" required="required"> <br/>
		Umur <input class="form-control mt-2" type="number" name="umur" required="required"> <br/>
		Alamat <textarea class="form-control mt-2" name="alamat" required="required"></textarea> <br/>
		<div class="text-center">
		    <input class="btn btn-primary" type="submit"  value="Simpan Data">
        </div>
	</form>

@endsection
