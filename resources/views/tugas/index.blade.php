@extends('layout.ceria')
@section('title', 'Tugas Pegawai')
@section('isikonten')
@section('judulhalaman', 'Data Tugas')

        <br>
        <a href="/tugas/tambah" class="btn btn-primary" > + Tambah Tugas Baru</a>
	<br/>
	<br/>
    <h5>Cari Data Tugas :</h5>
    <form action="/tugas/cari" method="GET">
        <div class="row">
            <div class="col-8">
                <input class="form-control mt-2" type="text" name="cari" placeholder="Cari Tugas .." value="{{ old('cari') }}">
            </div>
            <div>
                <input class="btn btn-primary mt-2" type="submit" value="CARI">
            </div>
        </div>
    </form> <br>
	<table class="table table-dark table-striped">
		<tr>
            <th>No</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
            <td>{{ $loop->iteration}}</td>
			<td>{{ $p->pegawai_nama }}</td>
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

    {{ $tugas->links() }}

    </div>
    @endsection
