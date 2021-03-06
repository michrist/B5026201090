@extends('layout.ceria')
@section('title', 'Tambah Tugas Pegawai')
@section('judulhalaman', 'Tambah Tugas')
@section('isikonten')
    <br>
    <a href="/tugas" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        Pegawai <select id="IDPegawai" class="form-control mt-2" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
        <div class="form-group">
            <label for="datetimepicker" class="control-label">Tanggal </label>
                <div class=' input-group date ' id='datetimepicker'>
                    <input type='text' required="required" class="form-control" name="Tanggal" />
                    <span class="input-group-addon input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </span>
                </div>
            </div>

		Nama Tugas <input class="form-control mt-2" type="text" name="NamaTugas" required="required"> <br>
		Status
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="inprog" name="Status" value="I" checked="checked">
            <label for="inprog">In Progress</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="finished" name="Status" value="F">
            <label for="finished">Finished</label><br>
        </div>
        <div class="text-center">
		    <input class="btn btn-primary" type="submit"  value="Simpan Data">
        </div>
	</form>
    </div>
@endsection
