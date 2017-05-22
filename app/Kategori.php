<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     protected $table = 'kategori';
    protected $fillable = ['title','keterangan'];

  
	public function rumah(){
		return $this->hasMany(Rumah::class);
	}

	 public function listKategoriTitle(){
    	$out = [];
    	foreach ($this->all() as $gori){
    		$out[$gori->id] = "{$gori->title}";
    	}
    	return $out;
    }
}
