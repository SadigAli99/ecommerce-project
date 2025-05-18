<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Language Routes Start
Route::post('/language/sort', [LanguageController::class, 'sort']);
Route::post('/language/{id}/change-status', [LanguageController::class, 'change_status']);
Route::get('/language/filter', [LanguageController::class, 'filter']);
Route::resource('language', LanguageController::class)->except('destroy');
Route::post('/language/{id}/destroy', [LanguageController::class, 'destroy'])->name('language.destroy');
// Language Routes End

// Setting Routes Start
Route::post('/setting/sort', [SettingController::class, 'sort']);
Route::get('/setting/filter', [SettingController::class, 'filter']);
Route::resource('setting', SettingController::class)->except('destroy');
Route::post('/setting/{id}/destroy', [SettingController::class, 'destroy'])->name('setting.destroy');
// Setting Routes End
