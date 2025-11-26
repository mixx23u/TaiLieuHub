<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/upload-document', [HomeController::class, 'uploadDocument'])->name('home.upload-document');

Route::get('/explore', [HomeController::class, 'explore'])->name('home.explore');

Route::get('/login', [HomeController::class, 'login'])->name('home.login');

Route::get('/register', [HomeController::class, 'register'])->name('home.register');

Route::get('/payment', [HomeController::class, 'payment'])->name('home.payment');

