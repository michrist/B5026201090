<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$tugas = DB::table('tugas')->get();

    	// mengirim data pegawai ke view index
    	return view('tugas.index',['tugas' => $tugas]);

    }
        // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('tugas.tambah');

    }
        // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tugas')->insert([
            'idpegawai' => $request->IDPegawai,
            'tanggal' => $request->Tanggal,
            'namatugas' => $request->NamaTugas,
            'status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');

    }
        // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.edit',['tugas' => $tugas]);

    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tugas')->where('id',$request->id)->update([
            'idpegawai' => $request->IDPegawai,
            'tanggal' => $request->Tanggal,
            'namatugas' => $request->NamaTugas,
            'status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
        // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tugas')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
}
