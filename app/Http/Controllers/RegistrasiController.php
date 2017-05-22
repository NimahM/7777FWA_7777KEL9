<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pembeli;
use App\Http\Requests\PembeliRequest;

class RegistrasiController extends Controller
{
  
 
  public function simpan(PembeliRequest $input)
  {
      $pembeli = new Pembeli;
      $pembeli->nama = $input->nama;
      $pembeli->no_telp= $input->no_telp;
      $pembeli->alamat = $input->alamat;
      $informasi = $pembeli->save() ? 'Data Berhasil disimpan' : 'Gagal simpan data';
    return view ('pembeli')->with(['informasi'=>$informasi]);
  }


    
}
