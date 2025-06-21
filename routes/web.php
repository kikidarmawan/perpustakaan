<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\KelolaAnggotaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'formLogin']);
Route::post('/login', [LoginController::class, 'loginAction'])->name('login.action');

Route::group(['admin'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/kelola-anggota', [KelolaAnggotaController::class, 'index'])->name('anggota.index');
})->middleware('auth');
