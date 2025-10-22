<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\UptExternalController;
use App\Http\Controllers\InovasiLayananController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\VisiController;

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

// Social Media
Route::get('/dashboard/social-media', [SocialMediaController::class, 'index'])->name('social_media.index');
Route::get('/dashboard/social-media/create', [SocialMediaController::class, 'create'])->name('social_media.create');
Route::post('/dashboard/social-media/store', [SocialMediaController::class, 'store'])->name('social_media.store');
Route::get('/dashboard/social-media/edit/{id}', [SocialMediaController::class, 'edit'])->name('social_media.edit');
Route::put('/dashboard/social-media/update/{id}', [SocialMediaController::class, 'update'])->name('social_media.update');
Route::delete('/dashboard/social-media/delete/{id}', [SocialMediaController::class, 'destroy'])->name('social_media.destroy');

//about
Route::get('/dashboard/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/dashboard/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('/dashboard/about/store', [AboutController::class, 'store'])->name('about.store');
Route::get('/dashboard/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/dashboard/about/{id}', [AboutController::class, 'update'])->name('about.update');
Route::delete('/dashboard/about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');

// task
Route::get('/dashboard/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/dashboard/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/dashboard/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/dashboard/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/dashboard/task/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/dashboard/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

// task
Route::get('/dashboard/visi', [VisiController::class, 'index'])->name('visi.index');
Route::get('/dashboard/visi/create', [VisiController::class, 'create'])->name('visi.create');
Route::post('/dashboard/visi/store', [VisiController::class, 'store'])->name('visi.store');
Route::get('/dashboard/visi/{id}/edit', [VisiController::class, 'edit'])->name('visi.edit');
Route::put('/dashboard/visi/{id}', [VisiController::class, 'update'])->name('visi.update');
Route::delete('/dashboard/visi/{id}', [VisiController::class, 'destroy'])->name('visi.destroy');

// organisasi
Route::get('/dashboard/organisasi', [OrganisasiController::class, 'index'])->name('organisasi.index');
Route::get('/dashboard/organisasi/create', [OrganisasiController::class, 'create'])->name('organisasi.create');
Route::post('/dashboard/organisasi/store', [OrganisasiController::class, 'store'])->name('organisasi.store');
Route::get('/dashboard/organisasi/{id}/edit', [OrganisasiController::class, 'edit'])->name('organisasi.edit');
Route::put('/dashboard/organisasi/{id}', [OrganisasiController::class, 'update'])->name('organisasi.update');
Route::delete('/dashboard/organisasi/{id}', [OrganisasiController::class, 'destroy'])->name('organisasi.destroy');

