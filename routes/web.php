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
Route::middleware(['auth', 'blocked'])->group(function(){
    Route::get('/myaccount', [App\Http\Controllers\UserController::class, "accountPage"]);
    Route::get('/create', [App\Http\Controllers\UserController::class, "create"]);
    Route::get('/review/{userId}&{itemId}', [App\Http\Controllers\ReviewController::class, "review"]);
    Route::post('/myaccount', [App\Http\Controllers\UserController::class, "store"]);
    Route::post('/myaccount/review/{userId}&{itemId}', [App\Http\Controllers\ReviewController::class, "store"]);
    Route::get('/myaccount/review/skip/{itemId}', [App\Http\Controllers\ReviewController::class, "skip"]);
    Route::get('/item/{id}', [App\Http\Controllers\ItemController::class, "itemPage"]);
    Route::get('/borrow/{id}', [App\Http\Controllers\ItemController::class, "borrowItem"]);
    Route::get('/admin/banhammer/{id}', [App\Http\Controllers\AdminController::class, "banhammer"]);
    Route::get('/admin/remove/item/{id}', [App\Http\Controllers\AdminController::class, "removeItem"]);
    Route::get('/user/logout', [App\Http\Controllers\UserController::class, "logout"]);
});

Route::middleware(['blocked'])->group(function(){
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\ItemController::class, "frontPage"]);
});
