<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\buku;
use App\penulis;
use App\penerbit;

class BukuController extends Controller
{
   protected $informasi = 'gagal melakukan aksi';
   public function awal(){
   		$semuaBuku = buku::all();
    	return view('buku.awal',compact('semuaBuku'));
    }
    public function tambah(){
    	$buku = new buku;
    	$penulis = new penulis;
    	$penerbit = new penerbit;
    	return view('buku.tambah',compact('buku','penulis','penerbit'));
    }
    public function simpan(Request $input){
    	$buku = new buku($input->only('penerbit_id','penulis_id'));
    	$buku->nama_buku = $input->nama_buku;
    	$buku->thn_terbit = $input->thn_terbit;
    	if($buku->save()) $this->informasi='Data Buku Berhasil Disimpan';
    	return redirect('buku')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
      $buku = buku::find($id);
      return view('buku.edit')->with(array('buku'=>$buku));
    }
    public function lihat($id)
    {
      $buku = buku::find($id);
      return view('buku.lihat')->with(array('buku'=>$buku));
    }
    public function update($id, Request $input)
    {
      $buku = buku::find($id);
      $buku->fill($input->only('penerbit_id','penulis_id'));
      $buku->nama_buku = $input->nama_buku;
      $buku->thn_terbit = $input->thn_terbit;
      if($buku->save()) $this->informasi='Data Buku Berhasil Dirubah';
      return redirect('buku')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
      $buku = buku::find($id);
      $informasi = $buku->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
      return redirect('buku')->with(['informasi'=>$informasi]);
    }
}
