<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SpmiDocumentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;

// Rute otomatis untuk semua fungsi API Posts (GET, POST, PUT, DELETE)
Route::apiResource('posts', PostController::class);
Route::apiResource('spmi', SpmiDocumentController::class);
Route::apiResource('pages', PageController::class);
Route::apiResource('programs', ProgramController::class);

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');
