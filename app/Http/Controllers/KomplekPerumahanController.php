<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Komplek_Perumahan;
use App\Http\Requests\Komplek_PerumahanRequest;

class KomplekPerumahanController extends Controller

{
   public function awal()
  {
    return view ('komplek_perumahan.awal',['data'=>Komplek_Perumahan::all()]);
  }
  public function tambah()
  {
    return view('komplek_perumahan.tambah');
  }
  public function simpan(Komplek_PerumahanRequest $input)
  {
    $komplek_perumahan = new Komplek_Perumahan();
    $komplek_perumahan->title= $input->title;
    $komplek_perumahan->keterangan= $input->keterangan;
    $informasi = $komplek_perumahan->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect ('komplek_perumahan')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
  $komplek_perumahan = Komplek_Perumahan::find($id);
  return view ('komplek_perumahan.edit')->with(array('komplek_perumahan'=>$komplek_perumahan));  
  }
  public function lihat($id)
  {
  $komplek_perumahan = Komplek_Perumahan::find($id);
  return view ('komplek_perumahan.lihat')->with(array('komplek_perumahan'=>$komplek_perumahan));
  }
  public function update($id, Komplek_PerumahanRequest $input)
  {
  $komplek_perumahan = Komplek_Perumahan::find($id);
  $komplek_perumahan->title = $input->title;
  $komplek_perumahan->keterangan = $input->keterangan;
  $informasi = $komplek_perumahan->save() ? 'Berhasil update data' : 'Gagal update data';
  return redirect('komplek_perumahan')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
  $komplek_perumahan = Komplek_Perumahan::find($id);
  $informasi = $komplek_perumahan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect ('komplek_perumahan')->with(['informasi'=>$informasi]);  
  }
}
