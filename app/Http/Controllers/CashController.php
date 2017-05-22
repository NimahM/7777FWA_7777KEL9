<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cash;
use App\Pembeli;
use App\Rumah;
use App\Http\Requests\CashRequest;
class CashController extends Controller
{
   
    
  protected $informasi = 'Gagal Melakukan Aksi';

  public function awal()
  {
    $semuaCash = Cash::all();
    return view('cash.awal',compact('semuaCash'));
  }

  public function tambah()
  {
    $pembeli = new Pembeli;
    $rumah = new Rumah;
    return view('cash.tambah',compact('pembeli','rumah'));
  }
  public function simpan(CashRequest $input)
  {
    $cash = new Cash($input->only('pembeli_id','rumah_id')); 
    $cash->tanggal_cash= $input->tanggal_cash;
    if($cash->save()) $this->informasi= 'data Berhasil Di Simpan';
    return redirect('cash')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
    $cash= Cash::find($id);
    $pembeli = new Pembeli;
    $rumah= new Rumah;
    return view('cash.edit',compact('pembeli','rumah','cash'));
  }
  public function lihat ($id)
  {
  $cash= Cash::find($id);
  return view ('cash.lihat',compact('cash'));
  }
  public function update ($id,CashRequest $input)
  {
    $cash = Cash::find($id);
      $cash->tanggal_cash= $input->tanggal_cash;
    $cash->fill($input->only('pembeli_id','rumah_id'));
    if($cash->save()) $this->informasi = " data cash telah Berhasil di Perbaharui";
    return redirect('cash')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $cash= Cash::find($id);
  $informasi = $cash->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
  return redirect('cash')->with(['informasi'=>$informasi]);
  }   
}