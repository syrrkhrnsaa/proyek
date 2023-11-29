<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

