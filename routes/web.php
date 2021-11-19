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

Route::get('/cek-object', [BookController::class, 'cekObject']);
Route::get('/insert', [BookController::class, 'insert']);
Route::get('/mass-assign1', [BookController::class, 'massAssignment1']);
Route::get('/mass-assign2', [BookController::class, 'massAssignment2']);
Route::get('/update', [BookController::class, 'update']);
Route::get('/update-where', [BookController::class, 'updateWhere']);
Route::get('/mass-update', [BookController::class, 'massUpdate']);
Route::get('/delete', [BookController::class, 'delete']);
Route::get('/destroy', [BookController::class, 'destroy']);
Route::get('/mass-delete', [BookController::class, 'massDelete']);
Route::get('/view-all', [BookController::class, 'viewAll']);
Route::get('/get-where', [BookController::class, 'getWhere']);
Route::get('/first', [BookController::class, 'first']);
Route::get('/find', [BookController::class, 'find']);
Route::get('/latest', [BookController::class, 'latest']);
Route::get('/limit', [BookController::class, 'limit']);
Route::get('/skip-take', [BookController::class, 'skipTake']);
Route::get('/soft-delete', [BookController::class, 'softDelete']);
Route::get('/with-trashed', [BookController::class, 'withTrashed']);
Route::get('/restore', [BookController::class, 'restore']);
Route::get('/force-delete', [BookController::class, 'forceDelete']);
