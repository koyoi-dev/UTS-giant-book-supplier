<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'index'])->name("home");
Route::get("/book/{book}", [BookController::class, 'show'])->name("book.show");
Route::get("/category/{category}", [CategoryController::class, 'show'])->name("category.show");
Route::get("/publisher", [PublisherController::class, 'index'])->name("publisher.index");
Route::get("/publisher/{publisher}", [PublisherController::class, 'show'])->name("publisher.show");

Route::get('/contact', ContactController::class)->name("contact");
