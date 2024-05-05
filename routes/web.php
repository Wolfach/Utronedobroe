<?php


use App\Http\Controllers\AnimepostersController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Route::resource('/dashboard', AnimepostersController::class);
// Route::get('/dashboard', [AnimepostersController::class, 'show']);

// Route::get('/dashboard',
//         [AnimepostersController::class, 'show'])
//         ->name('dashboard');
