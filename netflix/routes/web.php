<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\ActeurController;
use App\Http\Controllers\GenreController;

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

Route::get('/', [ShowController::class, 'index']);

Route::resource('home', ShowController::class);

Route::resource('movies', MovieController::class);

Route::resource('tv', TvController::class);

Route::resource('acteur', ActeurController::class);

Route::resource('genre', GenreController::class);

require __DIR__.'/auth.php';
