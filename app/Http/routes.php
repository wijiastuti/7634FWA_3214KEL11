<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

Route::group(['middleware'=>'AutentifikasiUser'],function(){
	Route::get('/', function () {
    return view('master');
});
Route::get('penulis','PenulisController@awal');
Route::get('penulis/tambah','PenulisController@tambah');
Route::post('penulis/simpan','PenulisController@simpan');
Route::get('penulis/edit/{penulis}','PenulisController@edit');
Route::post('penulis/edit/{penulis}','PenulisController@update');
Route::get('penulis/hapus/{penulis}','PenulisController@hapus');
Route::get('penulis/{penulis}','PenulisController@lihat');

Route::get('penerbit','PenerbitController@awal');
Route::get('penerbit/tambah','PenerbitController@tambah');
Route::post('penerbit/simpan','PenerbitController@simpan');
Route::get('penerbit/edit/{penerbit}','PenerbitController@edit');
Route::post('penerbit/edit/{penerbit}','PenerbitController@update');
Route::get('penerbit/hapus/{penerbit}','PenerbitController@hapus');
Route::get('penerbit/{penerbit}','PenerbitController@lihat');

Route::get('pengunjung','PengunjungController@awal');
Route::get('pengunjung/tambah','PengunjungController@tambah');
Route::post('pengunjung/simpan','PengunjungController@simpan');
Route::get('pengunjung/edit/{pengunjung}','PengunjungController@edit');
Route::post('pengunjung/edit/{pengunjung}','PengunjungController@update');
Route::get('pengunjung/hapus/{pengunjung}','PengunjungController@hapus');
Route::get('pengunjung/{pengunjung}','PengunjungController@lihat');


Route::get('kritiksaran','KritiksaranController@awal');
Route::get('kritiksaran/tambah','KritiksaranController@tambah');
Route::post('kritiksaran/simpan','KritiksaranController@simpan');
Route::get('kritiksaran/edit/{pengunjung}','KritiksaranController@edit');
Route::post('kritiksaran/edit/{pengunjung}','KritiksaranController@update');
Route::get('kritiksaran/hapus/{pengunjung}','KritiksaranController@hapus');
Route::get('kritiksaran/{pengunjung}','KritiksaranController@lihat');

Route::get('anggota','AnggotaController@awal');
Route::get('anggota/tambah','AnggotaController@tambah');
Route::post('anggota/simpan','AnggotaController@simpan');
Route::get('anggota/edit/{Anggota}','AnggotaController@edit');
Route::post('anggota/edit/{Anggota}','AnggotaController@update');
Route::get('anggota/hapus/{Anggota}','AnggotaController@hapus');
Route::get('anggota/{Anggota}','AnggotaController@lihat');

Route::get('buku','BukuController@awal');
Route::get('buku/tambah','BukuController@tambah');
Route::post('buku/simpan','BukuController@simpan');
Route::get('buku/edit/{buku}','BukuController@edit');
Route::post('buku/edit/{buku}','BukuController@update');
Route::get('buku/hapus/{buku}','BukuController@hapus');
Route::get('buku/{buku}','BukuController@lihat');

Route::get('anggota_buku','AnggotabukuController@awal');
Route::get('anggota_buku/tambah','AnggotabukuController@tambah');
Route::post('anggota_buku/simpan','AnggotabukuController@simpan');
Route::get('anggota_buku/edit/{anggota_buku}','AnggotabukuController@edit');
Route::post('anggota_buku/edit/{anggota_buku}','AnggotabukuController@update');
Route::get('anggota_buku/hapus/{anggota_buku}','AnggotabukuController@hapus');
Route::get('anggota_buku/{anggota_buku}','AnggotabukuController@lihat');

Route::get('petugas','PetugasController@awal');
Route::get('petugas/tambah','PetugasController@tambah');
Route::post('petugas/simpan','PetugasController@simpan');
Route::get('petugas/edit/{petugas}','PetugasController@edit');
Route::post('petugas/edit/{petugas}','PetugasController@update');
Route::get('petugas/hapus/{petugas}','PetugasController@hapus');
Route::get('petugas/{petugas}','PetugasController@lihat');

});

