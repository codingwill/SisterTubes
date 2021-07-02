<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('v_home');
});

//Produk
Route::get('/produk', 'ProdukController@getAll');
Route::get('/produk/tambah', 'ProdukController@formData');
Route::post('/produk/tambah', 'ProdukController@insertData');

//Kategori
Route::get('/kategori', 'KategoriController@getAll');
Route::get('/kategori/tambah', 'KategoriController@formData');
Route::post('/kategori/tambah', 'KategoriController@insertData');

//Manager
Route::get('/manajer', 'ManajerController@getAll');
Route::get('/manajer/tambah', 'ManajerController@formData');
Route::post('/manajer/tambah', 'ManajerController@insertData');

//Cabang
Route::get('/cabang', 'CabangController@getAll');
Route::get('/cabang/tambah', 'CabangController@formData');
Route::post('/cabang/tambah', 'CabangController@insertData');

//Karyawan
Route::view('/karyawan', 'form/vf_karyawan');
Route::get('/karyawan/tambah', 'KaryawanController@formData');
Route::post('/karyawan/tambah', 'KaryawanController@insertData');


route::view('/TabelStok', 'tabel/v_tabelstok');
route::view('/TabelDetailStok', 'tabel/v_tabeldetailstok');
//route::view('/TabelManajer', 'tabel/v_tabelmanajer');
route::view('/TabelKaryawan', 'tabel/v_tabelkaryawan');
route::view('/TabelCabang', 'tabel/v_tabelcabang');

/*
route::view('/cabang','form/vf_cabang');
route::view('/karyawan','form/vf_karyawan');
route::view('/manajer','form/vf_manajer');
route::view('/order','form/vf_order');
route::view('/orderstok','form/vf_orderstok');
*/


