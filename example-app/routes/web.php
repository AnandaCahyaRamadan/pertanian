<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InovasiLayananController;

// Route utama
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/login', function () {
    return view('login');
});

// =============================
// ROUTE INOVASI LAYANAN
// =============================

// Inovasi layanan
Route::get('/dashboard/inovasi-layanan', [InovasiLayananController::class, 'index'])->name('inovasi_layanan.index');
Route::get('/dashboard/inovasi-layanan/create', [InovasiLayananController::class, 'create'])->name('inovasi_layanan.create');
Route::post('/dashboard/inovasi-layanan/store', [InovasiLayananController::class, 'store'])->name('inovasi_layanan.store');
Route::get('/dashboard/inovasi-layanan/edit/{id}', [InovasiLayananController::class, 'edit'])->name('inovasi_layanan.edit');
Route::put('/dashboard/inovasi-layanan/update/{id}', [InovasiLayananController::class, 'update'])->name('inovasi_layanan.update');
Route::delete('/dashboard/inovasi-layanan/delete/{id}', [InovasiLayananController::class, 'destroy'])->name('inovasi_layanan.destroy');
