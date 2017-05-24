<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
     protected $table = 'anggota';
     protected $guarded = ['id'];

     public function anggota_buku(){
     	return hasMany(anggota_buku::class);
     }
}
