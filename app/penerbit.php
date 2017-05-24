<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
     protected $table = 'penerbit';
     protected $guarded = ['id'];
     public function buku(){
     	return $this->hasMany(buku::class);
     }
}
