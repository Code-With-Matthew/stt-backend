<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Rute otomatis untuk semua fungsi API Posts (GET, POST, PUT, DELETE)
Route::apiResource('posts', PostController::class);

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');
