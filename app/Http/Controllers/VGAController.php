<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VGAController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$vga = DB::table('vga')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('vga.index',['vga' => $vga]);

    }
        // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('vga.tambah');

    }
        // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('vga')->insert([
            'merkvga' => $request->merk,
            'stockvga' => $request->stock,
            'tersedia' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/vga');

    }
        // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $vga = DB::table('vga')->where('kodevga',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('vga.edit',['vga' => $vga]);

    }
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $vga = DB::table('vga')->where('kodevga',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('vga.detail',['vga' => $vga]);

    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('vga')->where('kodevga',$request->id)->update([
            'merkvga' => $request->merk,
            'stockvga' => $request->stock,
            'tersedia' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/vga');
    }
        // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('vga')->where('kodevga',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/vga');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$vga = DB::table('vga')->where('merkvga','like',"%".$cari."%")->paginate();

    		// mengirim data pegawai ke view index
		return view('vga.index',['vga' => $vga]);

	}
}
