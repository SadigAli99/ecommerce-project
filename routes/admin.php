<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialController;
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

// Social Routes Start
Route::post('/social/sort', [SocialController::class, 'sort']);
Route::post('/social/{id}/change-status', [SocialController::class, 'change_status']);
Route::get('/social/filter', [SocialController::class, 'filter']);
Route::resource('social', SocialController::class)->except('destroy');
Route::post('/social/{id}/destroy', [SocialController::class, 'destroy'])->name('social.destroy');
// Social Routes End
