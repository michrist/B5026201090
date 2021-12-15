@extends('layout.ceria')

@section('title', 'Tambah Nilai Kuliah')
@section('judulhalaman', 'Tambah Data Nilai Kuliah')
@section('isikonten')
    <br>
	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
		NRP <input class="form-control mt-2" type="text" name="nrp" required="required"> <br/>
		Nilai Angka <input class="form-control mt-2" type="text" name="nilaiangka" required="required"> <br/>
		SKS <input class="form-control mt-2" type="text" name="sks" required="required"> <br/>
		<div class="text-center">
		    <input class="btn btn-primary" type="submit"  value="Simpan Data">
        </div>
	</form>

@endsection
