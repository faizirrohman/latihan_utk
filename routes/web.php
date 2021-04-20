<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PrintController;
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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

Route::prefix('/formulir')->name('formulir.')->group(function () {
    Route::get('/index', [PesertaController::class, 'index'])->name('index');
    Route::get('/pendaftar', [PesertaController::class, 'pendaftar'])->name('pendaftar');
    Route::get('/create', [PesertaController::class, 'create'])->name('create');
    Route::post('/store', [PesertaController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [PesertaController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PesertaController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [PesertaController::class, 'destroy'])->name('destroy');
    Route::get('/print/{id}', [PrintController::class, 'dataSiswa'])->name('print');
    Route::get('/print', [PrintController::class, 'dataSemua'])->name('printSemua');
});