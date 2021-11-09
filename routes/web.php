<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [BookController::class, 'index']);

// Route::get('/category', [CategoryController::class, 'index']);
// Route::post('/category', [CategoryController::class, 'store']);

// Route::get('/author', [AuthorController::class, 'index']);

// Route::get('/publisher', [PublisherController::class, 'index']);
Route::resource('/', BookController::class);
Route::resource('book', BookController::class);
Route::resource('category', CategoryController::class);
Route::resource('author', AuthorController::class);
Route::resource('publisher', PublisherController::class);
