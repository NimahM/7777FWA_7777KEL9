<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Angsuran;
use App\Kredit;
use App\Http\Requests\AngsuranRequest;

class AngsuranController extends Controller
{
  
  protected $informasi = 'Gagal Melakukan Aksi';

  public function awal()
  {
    $semuaAngsuran = Angsuran::all();
    return view('angsuran.awal',compact('semuaAngsuran'));
  }

  public function tambah()
  {
    $kredit = new Kredit;
    return view('angsuran.tambah',compact('kredit'));
  }
  public function simpan(AngsuranRequest $input)
  {
    $angsuran = new Angsuran($input->only('kredit_id')); 
    $angsuran->lama_angsuran= $input->lama_angsuran;
    $angsuran->angsuranper_bulan= $input->angsuranper_bulan;
    if($angsuran->save()) $this->informasi= 'data Berhasil Di Simpan';
    return redirect('angsuran')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
    $angsuran= Angsuran::find($id);
    $kredit = new Kredit;
        return view('angsuran.edit',compact('kredit','angsuran'));
  }
  public function lihat ($id)
  {
  $angsuran= Angsuran::find($id);
  return view ('angsuran.lihat',compact('angsuran'));
  }
  public function update ($id,AngsuranRequest $input)
  {
    $angsuran = Angsuran::find($id);
    $angsuran->lama_angsuran= $input->lama_angsuran;
    $angsuran->angsuranper_bulan= $input->angsuranper_bulan;
    $angsuran->fill($input->only('kredit_id'));
    if($angsuran->save()) $this->informasi = " data angsuran telah Berhasil di Perbaharui";
    return redirect('angsuran')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $angsuran=Angsuran::find($id);
  $informasi = $angsuran->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
  return redirect('angsuran')->with(['informasi'=>$informasi]);
  }   
}