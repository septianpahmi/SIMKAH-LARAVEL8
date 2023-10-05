<?php

use App\Http\Controllers\DaftarController;
use App\Models\Pegawai;
use App\Models\Pendaftaran;
use App\Models\Persyaratan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\NikahController;
use App\Http\Controllers\SaksiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PersyaratanController;
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
    $data = Pegawai::all();
    return view('user.index', compact('data'));
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/home/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::post('/home/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/home/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/home/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/home/pegawai/update/{id}', [PegawaiController::class, 'update']);

Route::get('/home/daftar-nikah/{id}', [DaftarController::class, 'index']);
Route::post('/home/daftar-nikah/lokasi', [DaftarController::class, 'jadwalPost']);
Route::post('/home/daftar-nikah/calon-suami', [DaftarController::class, 'lokasiPost']);
Route::post('/home/daftar-nikah/calon-suami/ayah-suami', [DaftarController::class, 'suamiPost']);
Route::post('/home/daftar-nikah/calon-suami/ibu-suami', [DaftarController::class, 'ayahSuami']);
Route::post('/home/daftar-nikah/calon-istri', [DaftarController::class, 'ibuSuami']);
Route::post('/home/daftar-nikah/calon-istri/ayah-istri', [DaftarController::class, 'istriPost']);
Route::post('/home/daftar-nikah/calon-istri/ibu-istri', [DaftarController::class, 'ayahIstri']);
Route::post('/home/daftar-nikah/wali-nikah', [DaftarController::class, 'ibuIstri']);
Route::post('/home/daftar-nikah/dokumen', [DaftarController::class, 'waliPost']);
Route::post('/home/daftar-nikah/daftar-post', [DaftarController::class, 'postDaftar']);
Route::get('/home/daftar-nikah/delete/{id}', [DaftarController::class, 'delete']);
Route::get('/home/daftar-nikah/verif/{id}', [DaftarController::class, 'verif']);
Route::get('/home/daftar-nikah/tolak/{id}', [DaftarController::class, 'tolak']);

Route::get('/home/pendaftaran/{id}', [UserController::class, 'index']);
Route::get('/home/pdf/{id}', [UserController::class, 'generatePDF']);
