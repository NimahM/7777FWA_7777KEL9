<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
* 
*/
class CashRequest extends Request
{
	
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'tanggal_cash'=>'required',
			'pembeli_id'=>'required',
			'rumah_id'=>'required',
			
			
		];
	
		return $validasi;
	}

}


 
