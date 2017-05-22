<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $table = 'rumah';
    protected $fillable = ['tittle','keterangan','komplek_perumahan_id','kategori_id','harga'];

    public function kredit(){
        return $this->hasOne(Kredit::class);
    }

    public function cash(){
        return $this->hasOne(cash::class);
    }

    public function komplek_perumahan(){
        return $this->belongsTo(Komplek_Perumahan::class,'komplek_perumahan_id');
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }	

    public function listRumahTitle(){
        $out = [];
        foreach ($this->all() as $rum){
            $out[$rum->id] = "{$rum->title}";
        }
        return $out;
    }

}
