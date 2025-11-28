<?php

use App\Http\Controllers\User\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/get-documents', [UploadController::class, 'getDocuments'])->name('documents.get');