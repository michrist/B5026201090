@extends('layout.ceria')

@section('title', 'Absen Pegawai')

@section('isikonten')

@section('judulhalaman', 'Data Absen')

    <br>
	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table class="table table-dark table-striped">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection
