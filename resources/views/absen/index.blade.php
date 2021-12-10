@extends('layout.ceria')

@section('title', 'Absen Pegawai')

@section('isikonten')

@section('judulhalaman', 'Data Absen')

    <br>
	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Baru</a>

	<br/>
	<br/>
    <h5>Cari Data absen :</h5>
    <form action="/absen/cari" method="GET">
        <div class="row">
            <div class="col-8">
                <input class="form-control mt-2" type="text" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
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
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
            <td>{{ $loop->iteration}}</td>
			<td>{{ $p->pegawai_nama }}</td>
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

    {{ $absen->links() }}

    @endsection
