<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\penerbit;

class PenerbitController extends Controller
{
    public function awal(){
    	return view('penerbit.awal',['data'=>penerbit::all()]);
    }
    public function tambah(){
    	return view('penerbit.tambah');
    }
    public function simpan(Request $input){
    	$penerbit = new penerbit;
    	$penerbit->nama_penerbit = $input->nama_penerbit;
    	$penerbit->Alamat = $input->Alamat;
    	$informasi = $penerbit->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    	return redirect('penerbit')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
      $penerbit = penerbit::find($id);
      return view('penerbit.edit')->with(array('penerbit'=>$penerbit));
    }
    public function lihat($id)
    {
      $penerbit = penerbit::find($id);
      return view('penerbit.lihat')->with(array('penerbit'=>$penerbit));
    }
    public function update($id, Request $input)
    {
      $penerbit = penerbit::find($id);
      $penerbit->nama_penerbit = $input->nama_penerbit;
      $penerbit->Alamat = $input->Alamat;
      $informasi = $penerbit->save() ? 'Berhasil update data' :'Gagal update data';
      return redirect('penerbit')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
      $penerbit = penerbit::find($id);
      $informasi = $penerbit->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
      return redirect('penerbit')->with(['informasi'=>$informasi]);
    }
}
