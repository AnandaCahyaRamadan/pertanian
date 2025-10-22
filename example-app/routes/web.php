<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UptExternalController;
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

// UPT Ekternal
Route::get('/dashboard/upt-external', [UptExternalController::class, 'index'])->name('upt_external.index');
Route::get('/dashboard/upt-external/create', [UptExternalController::class, 'create'])->name('upt_external.create');
Route::post('/dashboard/upt-external/store', [UptExternalController::class, 'store'])->name('upt_external.store');
Route::get('/dashboard/upt-external/edit/{id}', [UptExternalController::class, 'edit'])->name('upt_external.edit');
Route::put('/dashboard/upt-external/update/{id}', [UptExternalController::class, 'update'])->name('upt_external.update');
Route::delete('/dashboard/upt-external/delete/{id}', [UptExternalController::class, 'destroy'])->name('upt_external.destroy');

// UPT Ekternal
Route::get('/dashboard/banner', [BannerController::class, 'index'])->name('banner.index');
Route::get('/dashboard/banner/create', [BannerController::class, 'create'])->name('banner.create');
Route::post('/dashboard/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/dashboard/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
Route::put('/dashboard/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
Route::delete('/dashboard/banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
