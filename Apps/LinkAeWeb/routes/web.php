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

// ----------------------------- ADMIN -----------------------------

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

// ----------------------------- USER -----------------------------

/**
 * Routing untuk masuk ke halaman login page
 */
Route::get('/login', [LoginController::class, 'index'])->name('login');
/**
 * Routing untuk mengecheck apakah username dan password sudah sesuai atau belum
 */
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', function () {
  return view('register');
})->name('register');
Route::post('/register', [LoginController::class, 'create']);


Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware('auth')->group(function () {
  /**
 * Routing untuk masuk ke halaman beranda page
 * 
 */
  Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth')->name('beranda');

  /** 
   * Routing untuk transaksi oleh user
   */
  Route::get('/sketsa/transaksi', function () {
    return view('sketsa-transaksi')->with('user', Auth::user());
  });
  Route::post('/sketsa/transaksi/konfirmasi', [TransaksiController::class, 'create']);

  /** Routing untuk pengisian saldo oleh user */
  Route::get('/sketsa/isi-saldo', function () {
    return view('sketsa-isisaldo')->with('user', Auth::user());
  });
  Route::post('/sketsa/isi-saldo/konfirmasi', [UserController::class, 'isiSaldo']);

  Route::get('/sketsa/transfer', function () {
    return view('sketsa-transfer')->with('user', Auth::user());
  });

  Route::get('/sketsa/ubahakun', function () {
    return view('sketsa-ubahakun')->with('user', Auth::user());
  });
  
  Route::post('/sketsa/ubahakun/gantiinfoakun', [UserController::class, 'gantiInfoAkun']);
}); 

Route::post('/sketsa/buat-akun/create', [UserController::class, 'create']);



Route::get('/sketsa/pusat-bantuan', [CustomerServiceController::class, 'show']);



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
