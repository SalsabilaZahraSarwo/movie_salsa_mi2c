<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Middleware\RoleAdmin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'homepage'])->name('homepage');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.detail');


// Menampilkan form
Route::get('/create-movie', [MovieController::class, 'create']);
Route::post('/create-movie', [MovieController::class, 'store']);


Route::get('/login', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit')->middleware('auth', RoleAdmin::class);

// update
Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update')->middleware('auth', RoleAdmin::class);

// delete
Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy')->middleware('auth');