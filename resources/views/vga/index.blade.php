@extends('layout.ceria')

@section('title', 'Data VGA')

@section('isikonten')

@section('judulhalaman', 'Data VGA')

    <br>
    <a href="/vga/tambah" class="btn btn-primary"> + Tambah VGA Baru</a>

	<br/>
	<br/>
    <h5>Cari Data VGA :</h5>
    <form action="/vga/cari" method="GET">
        <div class="row">
            <div class="col-8">
                <input class="form-control mt-2" type="text" name="cari" placeholder="Cari VGA .." value="{{ old('cari') }}">
            </div>
            <div>
                <input class="btn btn-primary mt-2" type="submit" value="CARI">
            </div>
        </div>
    </form> <br>
	<table class="table table-dark table-striped">
		<tr>
            <th>No</th>
			<th>Merk VGA</th>
			{{-- <th>Stock VGA</th> --}}
            <th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($vga as $p)
		<tr>
            <td>{{ $loop->iteration}}</td>
			<td>{{ $p->merkvga }}</td>
			{{-- <td>{{ $p->stockvga }}</td> --}}
            <td>{{ $p->tersedia }}</td>
			<td>
                <a href="/vga/detail/{{ $p->kodevga }}" class="btn btn-info">View Detail</a>
                |
				<a href="/vga/edit/{{ $p->kodevga }}" class="btn btn-warning">Edit</a>
				|
				<a href="/vga/hapus/{{ $p->kodevga }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $vga->links() }}

@endsection
