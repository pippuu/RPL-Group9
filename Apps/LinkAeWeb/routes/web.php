<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;

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
    return redirect('/inputpromo');
});


$transaksiController = TransaksiController::getInstance();
//Pada url /riwayat akan memanggil fungsi show pada class TransaksiController
Route::get('/riwayat', [$transaksiController::class, 'show']);

$getpromo = PromoController::getInstance();
/*Routing untuk menampilkan page getpromo pada url dengan memanggil
  fungsi show dalam class PromoController*/ 
Route::get('/getpromo', [$getpromo::class, 'show']);

$claimpromo = PromoController::getInstance();
/*Routing untuk request dalam mengklaim promo sesuai idPromo pada promo dengan 
  memanggil fungsi update dalam class PromoController*/ 
Route::post('/getpromo/claim/{idPromo}', [$claimpromo::class, 'update']);

$inputpromo = PromoController::getInstance();
Route::get('/inputpromo', [$inputpromo::class, 'index']);

$createpromo = PromoController::getInstance();
Route::post('/inputpromo/create', [$createpromo::class, 'create']);


/**
 * Routing untuk masuk ke halaman login page
 */
Route::get('/login', [LoginController::class, 'index']);
//Beranda page after login
Route::get('/beranda', [BerandaController::class, 'index']);


Route::post('/sketsa/buat-akun/create', [UserController::class, 'create']);

Route::get('/sketsa/buat-akun', function () {
  return view('sketsa-buatakun');
});

Route::get('/sketsa/transaksi', function () {
  return view('sketsa-transaksi');
});
Route::post('/sketsa/transaksi/konfirmasi', [TransaksiController::class, 'create']);

Route::get('/sketsa/transfer', function () {
  return view('sketsa-transfer');
});

Route::get('/sketsa/isi-saldo', function () {
  return view('sketsa-isisaldo');
});

Route::get('/sketsa/pusat-bantuan', function () {
  return view('sketsa-pusatbantuan');
});