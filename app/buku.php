<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
     protected $table = 'buku';
     protected $guarded = ['id'];
     public function penerbit(){
     	return $this->belongsTo(penerbit::class);
     }
     public function penulis(){
     	return $this->belongsTo(penulis::class);
     }
     public function anggota_buku(){
     	return hasMany(anggota_buku::class);
     }
}
