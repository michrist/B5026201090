@extends('layout.ceria')

@section('title', 'Tambah VGA')
@section('judulhalaman', 'Tambah Data VGA')
@section('isikonten')
    <br>
	<a href="/vga" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/vga/store" method="post">
		{{ csrf_field() }}
		Merk VGA <input class="form-control mt-2" type="text" name="merk" required="required"> <br/>
		Stock VGA <input class="form-control mt-2" type="text" name="stock" required="required"> <br/>
		Ketersediaan
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="ada" name="status" value="A" checked="checked">
            <label for="ada">Ada</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="status" value="T">
            <label for="tidak">Tidak</label><br>
        </div>
		<div class="text-center">
		    <input class="btn btn-primary" type="submit"  value="Simpan Data">
        </div>
	</form>

@endsection
