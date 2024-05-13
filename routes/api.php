<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AnimepostersController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('animeposters', AnimepostersController::class);
