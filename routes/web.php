<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\dokterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index']);

// Route untuk menampilkan daftar pasien
Route::get('/pasien', [pasienController::class, 'index']);

// Route untuk menampilkan form tambah pasien
Route::get('/pasien/create', [pasienController::class, 'create']);

// Route untuk memproses form tambah pasien
Route::post('/pasien', [pasienController::class, 'store']);


Route::get('/', [DashboardController::class, 'index']);

// Route untuk menampilkan daftar dokter
Route::get('/dokter', [dokterController::class, 'index']);

// Route untuk menampilkan form tambah dokter
Route::get('/dokter/create', [dokterController::class, 'create']);

// Route untuk memproses form tambah dokter
Route::post('/dokter', [dokterController::class, 'store']);



