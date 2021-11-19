<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



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

Route::get('/', [BookController::class, 'index']);
Route::get('/select', [BookController::class, 'select']);
Route::get('/insert', [BookController::class, 'insert']);
Route::get('/insert-timestamp', [BookController::class, 'insertTimestamp']);
Route::get('/insert-prepared', [BookController::class, 'insertPrepared']);
Route::get('/insert-binding', [BookController::class, 'insertBinding']);
Route::get('/update', [BookController::class, 'update']);
Route::get('/delete', [BookController::class, 'delete']);
Route::get('/statement', [BookController::class, 'statement']);
