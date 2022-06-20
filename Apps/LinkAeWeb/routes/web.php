<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RiwayatPelayananController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\UserController;
use App\Models\RiwayatPelayanan;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/login');
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
Route::get('/login', [LoginController::class, 'index'])->name('login');
/**
 * Routing untuk mengecheck apakah username dan password sudah sesuai atau belum
 */
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/login/flush', [LoginController::class, 'flush']);


Route::middleware('auth')->group(function () {
  /**
 * Routing untuk masuk ke halaman beranda page
 * 
 */
  Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth')->name('beranda');
}); 

/*Bentar bang*/
Route::get('/test-beranda', [BerandaController::class, 'index']);

// Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

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

Route::post('/sketsa/isi-saldo/konfirmasi', [UserController::class, 'isiSaldo']);

Route::get('/sketsa/pusat-bantuan', [CustomerServiceController::class, 'show']);

Route::get('/sketsa/ubahakun', function () {
  return view('sketsa-ubahakun');
});

Route::post('/sketsa/ubahakun/gantiinfoakun', [UserController::class, 'gantiInfoAkun']);

Route::group(['middleware' => 'auth'], function () {
  Route::get('profile', 'UserController@gantiNama')->name('profile.edit');
});

Route::get('/admin', function () {
  return view('adminberanda');
});
Route::get('/admin/usertable', [UserController::class, 'show']);
Route::get('/admin/cstable', [CustomerServiceController::class, 'show_admin']);
Route::get('/admin/promotable', [PromoController::class, 'show_admin']);
Route::get('/admin/transaksitable', [TransaksiController::class, 'show_admin']);