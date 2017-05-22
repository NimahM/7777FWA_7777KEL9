<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
* 
*/
class AngsuranRequest extends Request
{
	
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'lama_angsuran'=>'required',
			'angsuranper_bulan'=>'required',
			'kredit_id'=>'required',
			
			
		];
	
		return $validasi;
	}

}


 
