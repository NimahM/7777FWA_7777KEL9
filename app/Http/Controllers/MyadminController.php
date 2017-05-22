<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests;
use App\Myadmin;
use App\Pengguna;
use App\Http\Requests\MyadminRequest;

class MyadminController extends Controller
 {
  protected $informasi = 'Gagal Melakukan Aksi';
  public function awal()
  {
    $semuaMyadmin = Myadmin::all();
    return view('myadmin.awal',compact('semuaMyadmin'));
  }
  public function tambah()
  {
    return view('myadmin.tambah');
  }
  public function simpan(MyadminRequest $input)
  {
    $pengguna = new Pengguna($input->only('username','password'));
    if($pengguna->save()){
      $myadmin = new Myadmin;
      $myadmin->nama = $input->nama;
      $myadmin->alamat = $input->alamat;
      $myadmin->no_telpon= $input->no_telpon;
      $myadmin->umur = $input->umur;
      if($pengguna->myadmin()->save($myadmin)) $this->informasi='Berhasil Simpan Data'; 
    }   
    return redirect('myadmin')->with(['informasi'=>$this->informasi]);
  }
  public function edit ($id)
  {
  $myadmin=Myadmin::find($id);
  return view ('myadmin.edit')->with(array('myadmin'=>$myadmin));
  }
  public function lihat ($id)
  {
  $myadmin=Myadmin::find($id);
  return view ('myadmin.lihat')->with(array('myadmin'=>$myadmin));
  }
  public function update ($id, MyadminRequest $input)
  {
    $myadmin=Myadmin::find($id);
    $pengguna = $myadmin->pengguna;
    $myadmin->nama = $input->nama;
    $myadmin->no_telpon = $input->no_telpon;
    $myadmin->alamat = $input->alamat;
    $myadmin->save();
    if(!is_null($input->username)){
      $pengguna->fill($input->only('username'));
      if(!empty($input->password)){
        $pengguna->password = $input->password;
      }
      if($pengguna->save()){
        $this->informasi = 'Berhasil Simpan Data';
      }else{
        $this->informasi = 'Gagal Simpan Data';
      }
    } 
    return redirect('myadmin')->with(['informasi'=>$this->informasi]);
  }
  public function hapus ($id)
  {
  $myadmin= Myadmin::find($id);
  $informasi = $myadmin->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
  return redirect('myadmin')->with(['informasi'=>$informasi]);
  }
    
}
