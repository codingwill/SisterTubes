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

route::view('/TabelProduk', 'tabel/v_tabelproduk');
route::view('/TabelStok', 'tabel/v_tabelstok');
route::view('/TabelDetailStok', 'tabel/v_tabeldetailstok');
route::view('/TabelManajer', 'tabel/v_tabelmanajer');
route::view('/TabelKaryawan', 'tabel/v_tabelkaryawan');
route::view('/TabelCabang', 'tabel/v_tabelcabang');


route::view('/cabang','form/vf_cabang');
route::view('/karyawan','form/vf_karyawan');
route::view('/manajer','form/vf_manajer');
route::view('/order','form/vf_order');
route::view('/orderstok','form/vf_orderstok');
route::view('/produk','form/vf_produk');

//route::view('/login','v_login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
