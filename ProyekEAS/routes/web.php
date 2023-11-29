<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\BarangNotaController;

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

Route::get('/', function () {
    return view('welcome');
});

// barang 
Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::get('/barangs/create', [BarangController::class, 'create'])->name('barangs.create');
Route::post('/barangs', [BarangController::class, 'store'])->name('barangs.store');
Route::get('/barangs/{barang}', [BarangController::class, 'show'])->name('barangs.show');
Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
Route::put('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');

// kasir 
Route::get('/kasirs', [KasirController::class, 'index'])->name('kasirs.index');
Route::get('/kasirs/create', [KasirController::class, 'create'])->name('kasirs.create');
Route::post('/kasirs', [KasirController::class, 'store'])->name('kasirs.store');
Route::get('/kasirs/{kasir}', [KasirController::class, 'show'])->name('kasirs.show');
Route::get('/kasirs/{kasir}/edit', [KasirController::class, 'edit'])->name('kasirs.edit');
Route::put('/kasirs/{kasir}', [KasirController::class, 'update'])->name('kasirs.update');
Route::delete('/kasirs/{kasir}', [KasirController::class, 'destroy'])->name('kasirs.destroy');

// tenan
Route::get('/tenans', [TenanController::class, 'index'])->name('tenans.index');
Route::get('/tenans/create', [TenanController::class, 'create'])->name('tenans.create');
Route::post('/tenans', [TenanController::class, 'store'])->name('tenans.store');
Route::get('/tenans/{tenan}', [TenanController::class, 'show'])->name('tenans.show');
Route::get('/tenans/{tenan}/edit', [TenanController::class, 'edit'])->name('tenans.edit');
Route::put('/tenans/{tenan}', [TenanController::class, 'update'])->name('tenans.update');
Route::delete('/tenans/{tenan}', [TenanController::class, 'destroy'])->name('tenans.destroy');

// nota
Route::get('/notas', [NotaController::class, 'index'])->name('notas.index');
Route::get('/notas/create', [NotaController::class, 'create'])->name('notas.create');
Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
Route::get('/notas/{nota}', [NotaController::class, 'show'])->name('notas.show');
Route::get('/notas/{nota}/edit', [NotaController::class, 'edit'])->name('notas.edit');
Route::put('/notas/{nota}', [NotaController::class, 'update'])->name('notas.update');
Route::delete('/notas/{nota}', [NotaController::class, 'destroy'])->name('notas.destroy');

// barangnota
Route::get('/barang-notas', [BarangNotaController::class, 'index'])->name('barang-notas.index');
Route::get('/barang-notas/create', [BarangNotaController::class, 'create'])->name('barang-notas.create');
Route::post('/barang-notas', [BarangNotaController::class, 'store'])->name('barang-notas.store');
Route::get('/barang-notas/{barangNota}', [BarangNotaController::class, 'show'])->name('barang-notas.show');
Route::get('/barang-notas/{barangNota}/edit', [BarangNotaController::class, 'edit'])->name('barang-notas.edit');
Route::put('/barang-notas/{barangNota}', [BarangNotaController::class, 'update'])->name('barang-notas.update');
Route::delete('/barang-notas/{barangNota}', [BarangNotaController::class, 'destroy'])->name('barang-notas.destroy');

