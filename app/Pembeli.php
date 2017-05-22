<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $fillable = ['nama','no_telp','alamat','pengguna_id'];

    

	public function kredit(){
        return $this->hasOne(KrhasOneedit::class);
		}

	public function cash(){
        return $this->hasOne(cash::class);
		}

    public function listPembeliTitle(){
        $out = [];
        foreach ($this->all() as $pmb){
            $out[$pmb->id] = "{$pmb->nama}";
        }
        return $out;
}
  }