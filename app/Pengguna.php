<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;


class Pengguna extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'pengguna';
    protected $fillable=['username','password'];
    protected $guarded = ['id'];

 
 public function myadmin(){
		return $this->hasOne(Myadmin::class);
	}

 public function pembeli(){
		return $this->hasOne(Pembeli::class);
	}


}
