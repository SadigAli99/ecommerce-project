<?php

use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', fn() => view('back.auth.login'))->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);

Route::get('/admin/profile', fn() => view('back.auth.profile'))->middleware('auth:admin')->name('admin.profile');
Route::post('/admin/profile', [AdminController::class, 'update_profile']);

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('auth:admin');
