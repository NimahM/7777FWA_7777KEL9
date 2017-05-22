<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';
    protected $fillable = ['lama_angsuran','angsuran_bulan','kredit_id'];

    public function kredit(){
        return $this->belongsTo(Kredit::class, 'kredit_id');
		}

	
}
