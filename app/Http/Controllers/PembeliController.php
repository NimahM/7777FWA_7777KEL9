<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pembeli;
use App\Http\Requests\PembeliRequest;

class PembeliController extends Controller
{
  
  public function awal()
  {
    $semuaPembeli = Pembeli::all();
    return view('pembeli.awal',compact('semuaPembeli'));
  }
  public function tambah()
  {
    return view('pembeli.tambah');
  }
  public function simpan(PembeliRequest $input)
  {
      $pembeli = new Pembeli;
      $pembeli->nama = $input->nama;
      $pembeli->no_telp= $input->no_telp;
      $pembeli->alamat = $input->alamat;
      $informasi = $pembeli->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect ('pembeli')->with(['informasi'=>$informasi]);
  }


  public function edit ($id)
  {
  $pembeli=Pembeli::find($id);
  return view ('pembeli.edit')->with(array('pembeli'=>$pembeli));
  }


  public function lihat ($id)
  {
  $pembeli=Pembeli::find($id);
  return view ('pembeli.lihat')->with(array('pembeli'=>$pembeli));
  }


  public function update ($id, PembeliRequest $input)
  {
    $pembeli=Pembeli::find($id);
    $pembeli->nama = $input->nama;
    $pembeli->no_telp = $input->no_telp;
    $pembeli->alamat = $input->alamat;
   $informasi = $pembeli->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect ('pembeli')->with(['informasi'=>$informasi]);
  }

  public function hapus ($id)
  {
  $pembeli= Pembeli::find($id);
  $informasi = $pembeli->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
  return redirect('pembeli')->with(['informasi'=>$informasi]);
  }
    
}
