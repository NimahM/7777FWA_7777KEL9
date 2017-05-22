<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_Tarnsaksi extends Model
{
    protected $table = 'data_transaksi';
    protected $fillable = ['cash_id'];

    public function cash(){
        return $this->hasOne(Cash::class);
		}
}
