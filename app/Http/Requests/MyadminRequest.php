<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MyadminRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $validasi = [
            'nama'=>'required',
            'alamat'=>'required',
            'no_telpon'=>'required|size:12',
            'umur'=>'required',
            'username'=>'required',
        ];
        if($this->is('myadmin/tambah')){
            $validasi['password'] = 'required';
        }
        return $validasi;
    }
}
