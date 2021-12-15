<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaikuliahController extends Controller
{
    public function index()
    {
    	$nilaikuliah = DB::table('nilaikuliah')->paginate(5);

    	return view('nilaikuliah.index',compact('nilaikuliah'));

    }
    public function tambah()
    {
        return view('nilaikuliah.tambah');

    }
    public function store(Request $request)
    {


        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
        ]);
        return redirect('/nilaikuliah');

    }
    //     // method untuk edit data pegawai
    // public function edit($id)
    // {
    //     // mengambil data pegawai berdasarkan id yang dipilih
    //     $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
    //     // passing data pegawai yang didapat ke view edit.blade.php
    //     return view('pegawai.edit',['pegawai' => $pegawai]);

    // }
    // public function update(Request $request)
    // {
    //     // update data pegawai
    //     DB::table('pegawai')->where('pegawai_id',$request->id)->update([
    //         'pegawai_nama' => $request->nama,
    //         'pegawai_jabatan' => $request->jabatan,
    //         'pegawai_umur' => $request->umur,
    //         'pegawai_alamat' => $request->alamat
    //     ]);
    //     // alihkan halaman ke halaman pegawai
    //     return redirect('/pegawai');
    // }
    //     // method untuk hapus data pegawai
    // public function hapus($id)
    // {
    //     // menghapus data pegawai berdasarkan id yang dipilih
    //     DB::table('pegawai')->where('pegawai_id',$id)->delete();

    //     // alihkan halaman ke halaman pegawai
    //     return redirect('/pegawai');
    // }

    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;

    // 		// mengambil data dari table pegawai sesuai pencarian data
	// 	$pegawai = DB::table('pegawai')->where('pegawai_nama','like',"%".$cari."%")->orWhere('pegawai_alamat','like',"%".$cari."%")->paginate();

    // 		// mengirim data pegawai ke view index
	// 	return view('pegawai.index',['pegawai' => $pegawai]);

	// }
}
