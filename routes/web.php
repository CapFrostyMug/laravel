<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
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
    Route::get('/categories', [CategoriesController::class, 'index'])->name('news-categories');
    Route::get('/categories/{id}', [CategoriesController::class, 'showNewsTitles'])->name('news-titles');
    //Route::get('/categories/{id}/{newsId}', [NewsController::class, 'showNewsText'])->name('news-text');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
