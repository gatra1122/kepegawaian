<?php

use App\Http\Controllers\Dashboard\PegawaiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/dashboard/pegawai/tambah', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/dashboard/pegawai/tambah/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/dashboard/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/dashboard/pegawai/edit/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/dashboard/pegawai/hapus/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
});

require __DIR__.'/auth.php';
