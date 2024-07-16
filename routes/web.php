<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdministrasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('administrasi', AdministrasiController::class);
Route::get('administrasi/laporan/cetak', [AdministrasiController::class, 'laporan']);

Route::resource('pasien', PasienController::class);
Route::get('pasien/laporan/cetak', [PasienController::class, 'laporan']);
Route::get('pasien/cari/data', [PasienController::class, 'cari']);

Route::get('/', [PasienController::class, 'registrasi']);
Route::resource('dokter', DokterController::class);
Route::get('dokter/laporan/cetak', [DokterController::class, 'laporan']);


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
