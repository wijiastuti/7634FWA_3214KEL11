<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengunjung;

class pengunjungController extends Controller
{
    public function awal(){
    	return view('pengunjung.awal',['data'=>pengunjung::all()]);
    }
    public function tambah(){
    	return view('pengunjung.tambah');
    }
    public function simpan(Request $input){
    	$pengunjung = new pengunjung;
    	$pengunjung->nama_pengunjung = $input->nama_pengunjung;
    	$pengunjung->Alamat = $input->Alamat;
    	$pengunjung->ttl = $input->ttl;
    	$pengunjung->jenis_kelamin = $input->jenis_kelamin;
    	$informasi = $pengunjung->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    	return redirect('pengunjung')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
      $pengunjung = pengunjung::find($id);
      return view('pengunjung.edit')->with(array('pengunjung'=>$pengunjung));
    }
    public function lihat($id)
    {
      $pengunjung = pengunjung::find($id);
      return view('pengunjung.lihat')->with(array('pengunjung'=>$pengunjung));
    }
    public function update($id, Request $input)
    {
      $pengunjung = pengunjung::find($id);
      $pengunjung->nama_pengunjung = $input->nama_pengunjung;
      $pengunjung->Alamat = $input->Alamat;
      $pengunjung->ttl = $input->ttl;
      $pengunjung->jenis_kelamin = $input->jenis_kelamin;
      $informasi = $pengunjung->save() ? 'Berhasil update data' :'Gagal update data';
      return redirect('pengunjung')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
      $pengunjung = pengunjung::find($id);
      $informasi = $pengunjung->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
      return redirect('pengunjung')->with(['informasi'=>$informasi]);
    }
}
