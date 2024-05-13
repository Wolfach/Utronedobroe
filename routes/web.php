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
Route::get('/dashboard', [AnimepostersController::class, 'index'])->name('dashboard');
Route::resource('/dashboard', AnimepostersController::class);
// Route::get('images/{image}', 'ImageController@show')->name('image.show');
});
// });
// Route::get('/dashboard', [AnimepostersController::class, 'show']);

// Route::get('/dashboard',
//         [AnimepostersController::class, 'show'])
//         ->name('dashboard');
