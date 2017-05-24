<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\anggota_buku;
use App\buku;
use App\anggota;

class AnggotabukuController extends Controller
{
     protected $informasi = 'gagal melakukan aksi';
   public function awal(){
   		$semuaBuku = anggota_buku::all();
    	return view('anggota_buku.awal',compact('semuaBuku'));
    }
    public function tambah(){
    	$anggota_buku = new anggota_buku;
    	$buku = new buku;
    	$anggota = new anggota;
    	return view('anggota_buku.tambah',compact('anggota','buku','anggota_buku'));
    }
    public function simpan(Request $input){
    	$anggota_buku = new anggota_buku($input->only('anggota_id','buku_id'));
    	$anggota_buku->tgl_pinjam = $input->tgl_pinjam;
    	$anggota_buku->tgl_kembali= $input->tgl_kembali;
    	if($anggota_buku->save()) $this->informasi='Data Buku Berhasil Disimpan';
    	return redirect('anggota_buku')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {	

   	  $buku = new buku;
      $anggota = new anggota;	
      $anggota_buku = anggota_buku::find($id);
      return view('anggota_buku.edit',compact('buku','anggota','anggota_buku'))->with(array('anggota_buku'=>$anggota_buku));
    }
    public function lihat($id)
    {
      $anggota_buku = anggota_buku::find($id);
      return view('anggota_buku.lihat')->with(array('anggota_buku'=>$anggota_buku));
    }
    public function update($id, Request $input)
    {
      $anggota_buku = anggota_buku::find($id);
      $anggota_buku->fill($input->only('anggota_id','buku_id'));
      $anggota_buku->tgl_pinjam = $input->tgl_pinjam;
      $anggota_buku->tgl_kembali = $input->tgl_kembali;
      if($anggota_buku->save()) $this->informasi='Data anggota_buku Berhasil Dirubah';
      return redirect('anggota_buku')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
      $anggota_buku = anggota_buku::find($id);
      $informasi = $anggota_buku->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
      return redirect('anggota_buku')->with(['informasi'=>$informasi]);
    }
}
