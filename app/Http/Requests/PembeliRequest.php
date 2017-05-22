<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PembeliRequest extends Request
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
            'no_telp'=>'required|size:12',
            'alamat'=>'required',
        ];
        if($this->is('pembeli/tambah')){
            $validasi['password'] = 'required';
        }
        return $validasi;
    }
}
