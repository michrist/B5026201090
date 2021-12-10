@extends('layout.ceria')

@section('title', 'Detail VGA')

@section('isikonten')

@section('judulhalaman', 'Detail Data VGA')

    <br>
	<a href="/vga" class="btn btn-primary"> Kembali</a>
    <br>
    <br>

	@foreach($vga as $p)
		Merk VGA <label class="form-control mt-2"> {{ $p->merkvga }} </label> <br/>
		Stock VGA <label class="form-control mt-2"> {{ $p->stockvga }} </label> <br/>
		Ketersediaan <label class="form-control mt-2"> {{ $p->tersedia }} </label> <br/>
	@endforeach

    @endsection
