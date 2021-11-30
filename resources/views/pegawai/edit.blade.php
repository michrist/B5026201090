@extends('layout.ceria')

@section('title', 'Edit Pegawai')

@section('isikonten')

@section('judulhalaman', 'Edit Data Pegawai')

    <br>
	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input class="form-control" type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input class="form-control mt-2" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input class="form-control mt-2" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input class="form-control mt-2" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" class="form-control mt-2" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<div class="text-center">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach

    @endsection
