<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\anggota;

class AnggotaController extends Controller
{
     public function awal(){
    	return view('anggota.awal',['data'=>anggota::all()]);
    }
    public function tambah(){
    	return view('anggota.tambah');
    }
    public function simpan(Request $input){
    	$anggota = new anggota;
    	$anggota->nama = $input->nama;
    	$anggota->jenis_kelamin = $input->jenis_kelamin;
    	$anggota->alamat = $input->alamat;
    	$anggota->ttl = $input->ttl;
    	$informasi = $anggota->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    	return redirect('anggota')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
      $anggota = anggota::find($id);
      return view('anggota.edit')->with(array('anggota'=>$anggota));
    }
    public function lihat($id)
    {
      $anggota = anggota::find($id);
      return view('anggota.lihat')->with(array('anggota'=>$anggota));
    }
    public function update($id, Request $input)
    {
      $anggota = anggota::find($id);
      $anggota->nama = $input->nama;
      $anggota->jenis_kelamin = $input->jenis_kelamin;
      $anggota->alamat = $input->alamat;
      $anggota->ttl = $input->ttl;
      $informasi = $anggota->save() ? 'Berhasil update data' :'Gagal update data';
      return redirect('anggota')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
      $anggota = anggota::find($id);
      $informasi = $anggota->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
      return redirect('anggota')->with(['informasi'=>$informasi]);
    }
}
