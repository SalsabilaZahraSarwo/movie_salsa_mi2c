<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'homepage'])->name('homepage');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.detail');


// Menampilkan form
Route::get('/create-movie', [MovieController::class, 'create']);
Route::post('/create-movie', [MovieController::class, 'store']);

