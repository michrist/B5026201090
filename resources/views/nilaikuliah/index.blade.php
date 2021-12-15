@extends('layout.ceria')

@section('title', 'Data Nilai Kuliah')

@section('isikonten')

@section('judulhalaman', 'Data Nilai Kuliah')

    <br>
    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
	<table class="table table-dark table-striped">
		<tr>
            <th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
           @php
               $predikat = '';
           @endphp
            <td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
            <td>{{ $p->SKS }}</td>
            <td>
                @php
                    if($p->NilaiAngka <= 40){
                        $predikat = 'D';
                    }
                    elseif($p->NilaiAngka >= 41 || $p->NilaiAngka <= 60){
                        $predikat = 'C';
                    }
                    elseif($p->NilaiAngka >= 61 || $p->NilaiAngka <= 80){
                        $predikat = 'B';
                    }
                    elseif($p->NilaiAngka >= 81){
                        $predikat = 'A';
                    }
                @endphp
                {{$predikat}}
            </td>
            <td>{{ $p->NilaiAngka * $p->SKS }}</td>
		</tr>
		@endforeach
	</table>



@endsection
