<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/register','SesiController@reg');
Route::post('simpan','RegistrasiController@simpan');
Route::get('/about','SesiController@abt');
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@index');
Route::get('/','SesiController@index');

Route::group(['middleware'=>'User'],function(){});

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');


Route::get('pembeli','PembeliController@awal');
Route::get('pembeli/tambah','PembeliController@tambah');
Route::post('pembeli/simpan','PembeliController@simpan');
Route::get('pembeli/edit/{pembeli}','PembeliController@edit');
Route::post('pembeli/edit/{pembeli}','PembeliController@update');
Route::get('pembeli/lihat/{pembeli}','PembeliController@lihat');
Route::get('pembeli/hapus/{pembeli}','PembeliController@hapus');


Route::get('myadmin','MyadminController@awal');
Route::get('myadmin/tambah','MyadminController@tambah');
Route::post('myadmin/simpan','MyadminController@simpan');
Route::get('myadmin/edit/{myadmin}','MyadminController@edit');
Route::post('myadmin/edit/{myadmin}','MyadminController@update');
Route::get('myadmin/lihat/{myadmin}','MyadminController@lihat');
Route::get('myadmin/hapus/{myadmin}','MyadminController@hapus');

Route::get('komplek_perumahan','KomplekPerumahanController@awal');
Route::get('komplek_perumahan/tambah','KomplekPerumahanController@tambah');
Route::post('komplek_perumahan/simpan','KomplekPerumahanController@simpan');
Route::get('komplek_perumahan/edit/{komplek_perumahan}','KomplekPerumahanController@edit');
Route::post('komplek_perumahan/edit/{komplek_perumahan}','KomplekPerumahanController@update');
Route::get('komplek_perumahan/lihat/{komplek_perumahan}','KomplekPerumahanController@lihat');
Route::get('komplek_perumahan/hapus/{komplek_perumahan}','KomplekPerumahanController@hapus');

Route::get('kategori','KategoriController@awal');
Route::get('kategori/tambah','KategoriController@tambah');
Route::post('kategori/simpan','KategoriController@simpan');
Route::get('kategori/edit/{kategori}','KategoriController@edit');
Route::post('kategori/edit/{kategori}','KategoriController@update');
Route::get('kategori/lihat/{kategori}','KategoriController@lihat');
Route::get('kategori/hapus/{kategori}','KategoriController@hapus');


Route::get('rumah','RumahController@awal');
Route::get('rumah/tambah','RumahController@tambah');
Route::post('rumah/simpan','RumahController@simpan');
Route::get('rumah/edit/{rumah}','RumahController@edit');
Route::post('rumah/edit/{rumah}','RumahController@update');
Route::get('rumah/lihat/{rumah}','RumahController@lihat');
Route::get('rumah/hapus/{rumah}','RumahController@hapus');

Route::get('kredit','KreditController@awal');
Route::get('kredit/tambah','KreditController@tambah');
Route::post('kredit/simpan','KreditController@simpan');
Route::get('angsuran/tambah/{angsuran}','AngsuranController@tambah');
Route::get('kredit/edit/{kredit}','KreditController@edit');
Route::post('kredit/edit/{kredit}','KreditController@update');
Route::get('kredit/lihat/{kredit}','KreditController@lihat');
Route::get('kredit/hapus/{kredit}','KreditController@hapus');

Route::get('cash','CashController@awal');
Route::get('cash/tambah','CashController@tambah');
Route::post('cash/simpan','CashController@simpan');
Route::get('cash/edit/{cash}','CashController@edit');
Route::post('cash/edit/{cash}','CashController@update');
Route::get('cash/lihat/{cash}','CashController@lihat');
Route::get('cash/hapus/{cash}','CashController@hapus');

Route::get('angsuran','AngsuranController@awal');
Route::get('angsuran/tambah','AngsuranController@tambah');
Route::post('angsuran/simpan','AngsuranController@simpan');
Route::get('angsuran/edit/{angsuran}','AngsuranController@edit');
Route::post('angsuran/edit/{angsuran}','AngsuranController@update');
Route::get('angsuran/lihat/{angsuran}','AngsuranController@lihat');
Route::get('angsuran/hapus/{angsuran}','AngsuranController@hapus');
