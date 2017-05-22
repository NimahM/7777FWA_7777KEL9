<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
* 
*/
class RumahRequest extends Request
{
	
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'title'=>'required',
			'kategori_id'=>'required',
			'komplek_perumahan_id'=>'required',
			'harga'=>'required',
			
		];
	
		return $validasi;
	}

}


 
