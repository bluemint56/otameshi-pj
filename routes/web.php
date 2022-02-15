<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/home', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'add']);
Route::get('/todo/update', [TodoController::class, 'edit']);
Route::get('/todo/delete', [TodoController::class, 'delete']);
Route::get('/todo/find', [TodoController::class, 'find']);
Route::get('/', [TodoController::class, 'login']);