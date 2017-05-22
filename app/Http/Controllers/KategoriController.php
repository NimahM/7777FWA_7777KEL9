<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Kategori;
use App\Http\Requests\KategoriRequest;


class KategoriController extends Controller
{
    

   public function awal()
  {
    return view ('kategori.awal',['data'=>Kategori::all()]);
  }
  public function tambah()
  {
    return view('kategori.tambah');
  }
  public function simpan(KategoriRequest $input)
  {
    $kategori = new Kategori();
    $kategori->title= $input->title;
    $kategori->keterangan= $input->keterangan;
    $informasi = $kategori->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect ('kategori')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
  $kategori = Kategori::find($id);
  return view ('kategori.edit')->with(array('kategori'=>$kategori));  
  }
  public function lihat($id)
  {
  $kategori = Kategori::find($id);
  return view ('kategori.lihat')->with(array('kategori'=>$kategori));
  }
  public function update($id, kategoriRequest $input)
  {
  $kategori = Kategori::find($id);
  $kategori->title = $input->title;
  $kategori->keterangan = $input->keterangan;
  $informasi = $kategori->save() ? 'Berhasil update data' : 'Gagal update data';
  return redirect('kategori')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
  $kategori = Kategori::find($id);
  $informasi = $kategori->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
  return redirect ('kategori')->with(['informasi'=>$informasi]);  
  }
}
