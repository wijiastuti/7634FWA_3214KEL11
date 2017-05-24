<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
     protected $table = 'penulis';
     protected $guarded = ['id'];
     public function buku(){
     	return $this->hasMany(buku::class);
     }
}
