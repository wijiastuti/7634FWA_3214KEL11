<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota_buku extends Model
{
     protected $table = 'anggota_buku';
     protected $guarded = ['id'];

     public function anggota(){
     	return $this->belongsTo(anggota::class);
     }
     public function buku(){
     	return $this->belongsTo(buku::class);
     }
}
