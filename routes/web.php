<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [QuoteController::class, 'index']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'index']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index']);

Route::get('admin/movies', [AdminMovieController::class, 'index']);
Route::get('/admin/movies/create', [AdminMovieController::class, 'create']);
Route::post('/admin/movies', [AdminMovieController::class, 'store']);

Route::get('admin/movies/{movie}', [AdminMovieController::class, 'edit']);
Route::patch('admin/movies/{movie}', [AdminMovieController::class, 'update']);
