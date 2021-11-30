@extends('layout.ceria')

@section('title', 'Tambah Absen Pegawai')
@section('judulhalaman', 'Tambah Absen')
@section('isikonten')
    <br>
	<a href="/absen" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		Pegawai <select id="IDPegawai" class="form-control mt-2" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
		<div class="form-group">
            <label for="datetimepicker" class="control-label">Tanggal </label>
                <div class=' input-group date ' id='datetimepicker'>
                    <input type='text' required="required" class="form-control" name="tanggal" />
                    <span class="input-group-addon input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </span>
                </div>
            </div>
		Status
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="hadir" name="status" value="H">
            <label for="hadir">HADIR</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="status" value="T" checked="checked">
            <label for="tidak">TIDAK HADIR</label><br>
        </div>
        <div class="text-center">
		    <input class="btn btn-primary" type="submit"  value="Simpan Data">
        </div>
	</form>

@endsection
