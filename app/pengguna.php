<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
    protected $table = 'pengguna';
    protected $guarded = ['id'];

    public function petugas(){
    	return $this->hasOne(petugas::class);
    }
}
