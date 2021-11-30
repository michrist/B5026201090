@extends('layout.ceria')
@section('title', 'Edit Tugas Pegawai')
@section('isikonten')
@section('judulhalaman', 'Edit Tugas')

    <br>
    <a href="/tugas" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Pegawai <select class="form-control mt-2" id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->idpegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
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
		Nama Tugas <input class="form-control" type="text" required="required" name="NamaTugas" value="{{ $p->namatugas }}"> <br/>
		Status
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="inprog" name="Status" value="I" @if ($p->status === "I") checked="checked" @endif>
            <label for="inprog">In Progress</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="finished" name="Status" value="F" @if ($p->status === "F") checked="checked" @endif>
            <label for="finished">Finished</label><br>
        </div>
        <div class="text-center">
		    <input class="btn btn-primary" type="submit"  value="Simpan Data">
        </div>
	</form>
	@endforeach
    </div>

@endsection
