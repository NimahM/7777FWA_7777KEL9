<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kredit;
use App\Pembeli;
use App\Rumah;
use App\Http\Requests\KreditRequest;
class KreditController extends Controller
{
    

  protected $informasi = 'Gagal Melakukan Aksi';

  public function awal()
  {
    $semuaKredit = Kredit::all();
    return view('kredit.awal',compact('semuaKredit'));
  }

  public function tambah()
  {
    $pembeli = new Pembeli;
    $rumah = new Rumah;
    return view('kredit.tambah',compact('pembeli','rumah'));
  }
  public function simpan(KreditRequest $input)
  {
    $kredit = new Kredit($input->only('pembeli_id','rumah_id')); 
    $kredit->tanggal_kredit= $input->tanggal_kredit;
    if($kredit->save()) $this->informasi= 'data Berhasil Di Simpan';
    return redirect('kredit')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
    $kredit= Kredit::find($id);
    $pembeli = new Pembeli;
    $rumah= new Rumah;
    return view('kredit.edit',compact('pembeli','rumah','kredit'));
  }
  public function lihat ($id)
  {
  $kredit= Kredit::find($id);
  return view ('kredit.lihat',compact('kredit'));
  }
  public function update ($id,KreditRequest $input)
  {
    $kredit = Kredit::find($id);
    $kredit->tanggal_kredit= $input->tanggal_kredit;
    $kredit->fill($input->only('pembeli_id','rumah_id'));
    if($kredit->save()) $this->informasi = " data kredit telah Berhasil di Perbaharui";
    return redirect('kredit')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $kredit= Kredit::find($id);
  $informasi = $kredit->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
  return redirect('kredit')->with(['informasi'=>$informasi]);
  }   
}