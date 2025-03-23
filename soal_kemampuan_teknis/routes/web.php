<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\UnitKerjaController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::prefix('pegawai')->name('pegawai.')->group(function () {
        Route::get('/', [PegawaiController::class, 'index'])->name('index');
        Route::get('/tambah', [PegawaiController::class, 'create'])->name('tambah');
        Route::post('/tambah', [PegawaiController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [PegawaiController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PegawaiController::class, 'destroy'])->name('delete');
        Route::get('/download', [PegawaiController::class, 'download_pdf'])->name('download_pdf');
    });

    Route::prefix('jabatan')->name('jabatan.')->group(function () {
        Route::get('/', [JabatanController::class, 'index'])->name('index');
        Route::get('/tambah', [JabatanController::class, 'create'])->name('tambah');
        Route::post('/tambah', [JabatanController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [JabatanController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [JabatanController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [JabatanController::class, 'destroy'])->name('delete');
    });

    Route::prefix('unit-kerja')->name('unit-kerja.')->group(function() {
        Route::get('/', [UnitKerjaController::class, 'index'])->name('index');
        Route::get('/tambah', [UnitKerjaController::class, 'create'])->name('tambah');
        Route::post('/tambah', [UnitKerjaController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UnitKerjaController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [UnitKerjaController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [UnitKerjaController::class, 'destroy'])->name('delete');
    });
});
