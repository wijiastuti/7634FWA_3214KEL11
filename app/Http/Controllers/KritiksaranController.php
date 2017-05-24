<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kritiksaran;

class KritiksaranController extends Controller
{
    public function awal(){
    	return view('kritiksaran.awal',['data'=>kritiksaran::all()]);
    }
    public function tambah(){
    	return view('kritiksaran.tambah');
    }
    public function simpan(Request $input){
    	$kritiksaran = new kritiksaran;
    	$kritiksaran->kritik = $input->kritik;
    	$kritiksaran->saran = $input->saran;
    	$informasi = $kritiksaran->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    	return redirect('kritiksaran')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
      $kritiksaran = kritiksaran::find($id);
      return view('kritiksaran.edit')->with(array('kritiksaran'=>$kritiksaran));
    }
    public function lihat($id)
    {
      $kritiksaran = kritiksaran::find($id);
      return view('kritiksaran.lihat')->with(array('kritiksaran'=>$kritiksaran));
    }
    public function update($id, Request $input)
    {
      $kritiksaran = kritiksaran::find($id);
      $kritiksaran->kritik = $input->kritik;
      $kritiksaran->saran = $input->saran;
      $informasi = $kritiksaran->save() ? 'Berhasil update data' :'Gagal update data';
      return redirect('kritiksaran')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
      $kritiksaran = kritiksaran::find($id);
      $informasi = $kritiksaran->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
      return redirect('kritiksaran')->with(['informasi'=>$informasi]);
    }
}
