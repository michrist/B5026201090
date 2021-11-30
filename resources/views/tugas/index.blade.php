@extends('layout.ceria')
@section('title', 'Tugas Pegawai')
@section('isikonten')
@section('judulhalaman', 'Data Tugas')

        <br>
        <a href="/tugas/tambah" class="btn btn-primary" > + Tambah Tugas Baru</a>
	<br/>
	<br/>

	<table class="table table-dark table-striped">
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
				<a href="/tugas/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>
    </div>
    @endsection
