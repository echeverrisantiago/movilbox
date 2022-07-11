<?php

use App\Http\Controllers\ExerciseXController;
use App\Http\Controllers\HistoGramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatrizController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/buildX', [ExerciseXController::class, 'buildX']);
Route::get('/histogram', [HistoGramController::class, 'histogram']);
Route::get('/matriz', [MatrizController::class, 'matriz']);

Auth::routes();

