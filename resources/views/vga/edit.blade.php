@extends('layout.ceria')

@section('title', 'Edit VGA')

@section('isikonten')

@section('judulhalaman', 'Edit Data VGA')

    <br>
	<a href="/vga" class="btn btn-primary"> Kembali</a>

	@foreach($vga as $p)
	<form action="/vga/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodevga}}"> <br/>
		Merk VGA <input class="form-control mt-2" type="text" required="required" name="merk" value="{{ $p->merkvga }}"> <br/>
		Stock VGA <input class="form-control mt-2" type="text" required="required" name="stock" value="{{ $p->stockvga }}"> <br/>
		Ketersediaan
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="ada" name="status" value="A" @if ($p->tersedia === "A") checked="checked" @endif>
            <label for="ada">Ada</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="status" value="T" @if ($p->tersedia === "T") checked="checked" @endif>
            <label for="tidak">Tidak</label><br>
        </div>
        <div class="text-center">
		    <input class="btn btn-primary" type="submit"  value="Simpan Data">
        </div>
	</form>
	@endforeach

    @endsection
