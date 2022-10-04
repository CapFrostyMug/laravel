<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\URL;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('news')->group(function () {
    Route::get('/categories', [CategoryController::class, 'showNewsCategories'])->name('news-categories');
    //Route::get('/categories/{slug}', [CategoryController::class, 'showNews'])->name('news-titles');
    Route::get('/categories/{categoryId}', [CategoryController::class, 'showNews'])->name('news-titles');
    Route::get('/categories/{categoryId}/{newsId}', [NewsController::class, 'showNews'])->name('news-text');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
