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

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/data-kandidat', [App\Http\Controllers\KelolaDataController::class, 'index'])->name('data-kandidat');
Route::get('/data-pemilih', [App\Http\Controllers\KelolaDataController::class, 'dataPemilih'])->name('data-pemilih');
Route::get('/tambah-calon', [App\Http\Controllers\KelolaDataController::class, 'tambahCalon'])->name('tambah-calon');
Route::get('/tambah-pemilih', [App\Http\Controllers\KelolaDataController::class, 'tambahPemilih'])->name('tambah-pemilih');
Route::get('/edit-calon', [App\Http\Controllers\KelolaDataController::class, 'editCalon'])->name('edit-calon');
Route::get('/edit-pemilih', [App\Http\Controllers\KelolaDataController::class, 'editPemilih'])->name('edit-pemilih');
