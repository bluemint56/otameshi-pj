<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TagController;

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


Route::get('/home', [TodoController::class, 'index'])->middleware('auth');
Route::get('/todo/create', [TodoController::class, 'add']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::get('/todo/update', [TodoController::class, 'edit']);
Route::post('/todo/update', [TodoController::class, 'update']);
Route::get('/todo/delete', [TodoController::class, 'delete']);
Route::post('/todo/delete', [TodoController::class, 'remove']);
Route::get('/todo/find', [TodoController::class, 'find']);
Route::post('/todo/find', [TodoController::class, 'search']);
Route::get('/', [TodoController::class, 'login']);
Route::post('/home', [TodoController::class, 'logincheck']);

Route::get('/relation', [TodoController::class, 'relate']);

Route::prefix('tag')->group(function(){
    Route::get('/', [TagController::class, 'index']);
    Route::post('/add', [TagController::class, 'create']);
    Route::post('/update', [TagController::class, 'update']);
    Route::post('/delete', [TagController::class, 'delete']);
});



Route::get('/login', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
