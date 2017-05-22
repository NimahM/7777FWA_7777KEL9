<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komplek_Perumahan extends Model
{
     protected $table = 'komplek_perumahan';
    protected $fillable = ['title','keterangan'];

  
	public function rumah(){
		return $this->hasMany(Rumah::class);
	}

	 public function listKomplekTitle(){
    	$out = [];
    	foreach ($this->all() as $kt){
    		$out[$kt->id] = "{$kt->title}";
    	}
    	return $out;
    }
}
