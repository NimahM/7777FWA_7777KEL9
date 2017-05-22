<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Rumah;
use App\Komplek_Perumahan;
use App\Kategori;
use App\Http\Requests\RumahRequest;

class RumahController extends Controller
{
  protected $informasi = 'Gagal Melakukan Aksi';

  public function awal()
  {
    $semuaRumah = Rumah::all();
    return view('rumah.awal',compact('semuaRumah'));
  }

  public function tambah()
  {
    $kategori = new Kategori;
    $komplek_perumahan = new Komplek_Perumahan;
    return view('rumah.tambah',compact('komplek_perumahan','kategori'));
  }
  public function simpan(RumahRequest $input)
  {
    $rumah = new Rumah($input->only('komplek_perumahan_id','kategori_id')); 
    $rumah->title= $input->title;
    $rumah->keterangan= $input->keterangan;
    $rumah->harga= $input->harga;
    if($rumah->save()) $this->informasi= 'data Berhasil Di Simpan';
    return redirect('rumah')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
    $rumah= Rumah::find($id);
    $komplek_perumahan = new Komplek_Perumahan;
    $kategori= new Kategori;
    return view('rumah.edit',compact('komplek_perumahan','kategori','rumah'));
  }
  public function lihat ($id)
  {
  $rumah= Rumah::find($id);
  return view ('rumah.lihat',compact('rumah'));
  }
  public function update ($id,RumahRequest $input)
  {
    $rumah = Rumah::find($id);
    $rumah->title= $input->title;
    $rumah->keterangan= $input->keterangan;
    $rumah->harga= $input->harga;
    $rumah->fill($input->only('komplek_perumahan_id','kategori_id'));
    if($rumah->save()) $this->informasi = "kategori dan komplek_perumahan Berhasil di Perbaharui";
    return redirect('rumah')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $rumah= Rumah::find($id);
  $informasi = $rumah->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
  return redirect('rumah')->with(['informasi'=>$informasi]);
  }   
}