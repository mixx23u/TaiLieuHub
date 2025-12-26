<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\DocumentController;
use App\Http\Controllers\User\UploadController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/upload-document', [HomeController::class, 'uploadDocument'])->name('home.upload-document');

Route::get('/explore', [HomeController::class, 'explore'])->name('home.explore');

Route::get('/login', [HomeController::class, 'login'])->name('home.login');

Route::get('/register', [HomeController::class, 'register'])->name('home.register');

Route::get('/payment', [HomeController::class, 'payment'])->name('home.payment');

Route::post('/documents/upload', [UploadController::class, 'store'])->name('documents.store');

Route::get('/documents/detail/{id}', [DocumentController::class, 'show'])->name('documents.show');

Route::get('/documents/category/{category}', [DocumentController::class, 'showByCategory'])->name('documents.category');
// MVC auth (session)
Route::post('/register', [AuthController::class, 'register'])->name('web.register');
Route::post('/login', [AuthController::class, 'login'])->name('web.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('web.logout');
