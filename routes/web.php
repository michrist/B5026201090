<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('praktikum1', function () {
    return view('prak1');
});
Route::get('tugaspweb4', function () {
    return view('tugas4');
});
Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('ETS', 'ViewController@showETS');
Route::get('tugasphp', 'ViewController@showTugasPHP');
Route::post('factorialphp', 'ViewController@factorial');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');
Route::get('/tugas/cari','TugasController@cari');

//route CRUD
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//route CRUD
Route::get('/vga','VGAController@index');
Route::get('/vga/tambah','VGAController@tambah');
Route::post('/vga/store','VGAController@store');
Route::get('/vga/edit/{id}','VGAController@edit');
Route::post('/vga/update','VGAController@update');
Route::get('/vga/hapus/{id}','VGAController@hapus');
Route::get('/vga/cari','VGAController@cari');
Route::get('/vga/detail/{id}','VGAController@view');
