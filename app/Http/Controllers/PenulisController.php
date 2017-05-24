<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\penulis;
class PenulisController extends Controller
{
    public function awal(){
    	return view('penulis.awal',['data'=>penulis::all()]);
    }
    public function tambah(){
    	return view('penulis.tambah');
    }
    public function simpan(Request $input){
    	$penulis = new penulis;
    	$penulis->nama_penulis = $input->nama_penulis;
    	$penulis->ttl = $input->ttl;
    	$penulis->Alamat = $input->Alamat;
    	$informasi = $penulis->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    	return redirect('penulis')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
      $penulis = penulis::find($id);
      return view('penulis.edit')->with(array('penulis'=>$penulis));
    }
    public function lihat($id)
    {
      $penulis = penulis::find($id);
      return view('penulis.lihat')->with(array('penulis'=>$penulis));
    }
    public function update($id, Request $input)
    {
      $penulis = penulis::find($id);
      $penulis->nama_penulis = $input->nama_penulis;
      $penulis->ttl = $input->ttl;
      $penulis->Alamat = $input->Alamat;
      $informasi = $penulis->save() ? 'Berhasil update data' :'Gagal update data';
      return redirect('penulis')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
      $penulis = penulis::find($id);
      $informasi = $penulis->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
      return redirect('penulis')->with(['informasi'=>$informasi]);
    }
}
