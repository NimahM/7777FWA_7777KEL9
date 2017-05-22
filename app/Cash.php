<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $table = 'cash';
    protected $fillable = ['tanggal_cash','pembeli_id','rumah_id'];

    public function pembeli(){
        return $this->belongsTo(Pembeli::class,'pembeli_id');
		}

	public function rumah(){
		return $this->belongsTo(Rumah::class,'rumah_id');
	}
}
