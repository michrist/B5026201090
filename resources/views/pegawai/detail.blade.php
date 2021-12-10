@extends('layout.ceria')

@section('title', 'Detail Pegawai')

@section('isikonten')

@section('judulhalaman', 'Detail Pegawai')

    <br>
	<a href="/pegawai" class="btn btn-primary"> Kembali</a>
    <br>
    <br>
	@foreach($pegawai as $p)
		Nama <label class="form-control mt-2"> {{ $p->pegawai_nama }} </label> <br/>
		Jabatan <label class="form-control mt-2">{{ $p->pegawai_jabatan }} </label> <br/>
		Umur <label class="form-control mt-2"> {{ $p->pegawai_umur }} </label> <br/>
		Alamat <label class="form-control mt-2">{{ $p->pegawai_alamat }}</label> <br/>

	@endforeach

    @endsection
