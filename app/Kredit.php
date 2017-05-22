<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    protected $table = 'kredit';
    protected $fillable = ['tanggal_kredit','pembeli_id','rumah_id'];

    public function pembeli(){
        return $this->belongsTo(Pembeli::class,'pembeli_id');
		}

	public function rumah(){
		return $this->belongsTo(Rumah::class,'rumah_id');
	}

	public function angsuran(){
		return $this->hasOne(Angsuran::class);
	}

      public function listKreditTitle(){
        $out = [];
        foreach ($this->all() as $kred){
            $out[$kred->id] = "{$kred->pembeli->nama}";
        }
        return $out;
    }
}
