<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\BookController::class, 'index'])->name('home');
Route::get('/books', [\App\Http\Controllers\BookController::class, 'books'])->name('books');
Route::get('/search', [\App\Http\Controllers\BookController::class, 'search'])->name('search');
Route::get('/about', [\App\Http\Controllers\BookController::class, 'about'])->name('about');
Route::get('/reader/{id}', [\App\Http\Controllers\BookController::class, 'reader'])->name('reader');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
