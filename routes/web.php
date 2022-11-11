<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
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
Route::get('/quotes/{quote}', [QuoteController::class, 'show']);

Route::get('/movies/{movie:slug}', [MovieController::class, 'index']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index']);

Route::get('admin/movies', [AdminMovieController::class, 'index']);
Route::get('/admin/movies/create', [AdminMovieController::class, 'create']);
Route::post('/admin/movies', [AdminMovieController::class, 'store']);

Route::get('admin/movies/{movie}/edit', [AdminMovieController::class, 'edit']);
Route::patch('admin/movies/{movie}', [AdminMovieController::class, 'update']);
Route::delete('admin/movies/{movie}', [AdminMovieController::class, 'destroy']);

Route::get('admin/quotes', [AdminQuoteController::class, 'index']);
Route::get('admin/quotes/create', [AdminQuoteController::class, 'create']);
Route::post('admin/quotes', [AdminQuoteController::class, 'store']);

Route::get('admin/quotes/{quote}/edit', [AdminQuoteController::class, 'edit']);
Route::patch('admin/quotes/{quote}', [AdminQuoteController::class, 'update']);
Route::delete('admin/quotes/{quote}', [AdminQuoteController::class, 'destroy']);
