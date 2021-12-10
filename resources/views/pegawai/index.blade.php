@extends('layout.ceria')

@section('title', 'Data Pegawai')

@section('isikonten')

@section('judulhalaman', 'Data Pegawai')

    <br>
    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <h5>Cari Data Pegawai :</h5>
    <form action="/pegawai/cari" method="GET">
        <div class="row">
            <div class="col-8">
                <input class="form-control mt-2" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            </div>
            <div>
                <input class="btn btn-primary mt-2" type="submit" value="CARI">
            </div>
        </div>
    </form> <br>
	<table class="table table-dark table-striped">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration}}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-info">View Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

@endsection
