<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use Illuminate\Support\Facades\URL;

use \App\Http\Controllers\Admin\ParserController;
use \App\Http\Controllers\SocialProvidersController;

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

Route::get('/parser', [ParserController::class, 'getCurrency'])->name('parser');

Route::prefix('news')->group(function () {
    Route::get('/categories', [CategoryController::class, 'getCategories'])->name('news-categories');
    Route::get('/categories/{category}', [CategoryController::class, 'getNews'])->name('news-titles');
    Route::get('/categories/{category}/{news}', [NewsController::class, 'getOneNews'])->name('news-text');
});

Route::middleware('is_admin')->group(function () {
    Route::name('admin.')
        ->prefix('admin')
        ->group(
            function () {
                Route::get('/', [AdminIndexController::class, 'index'])->name('index');

                Route::match(['get', 'post'], '/create', [AdminNewsController::class, 'addNews'])->name('create');
                Route::get('/editor', [AdminIndexController::class, 'getNews'])->name('editor-list');
                Route::match(['get', 'post'], '/editor/{news}', [AdminNewsController::class, 'editNews'])->name('editor-form');

                Route::get('/download-image', [AdminIndexController::class, 'downloadImage'])->name('download.image');
                Route::get('/download-news', [AdminIndexController::class, 'downloadNewsJsonFile'])->name('download.news');
            }
        );
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/auth/redirect/{driver}', [SocialProvidersController::class, 'redirect'])
        ->where('driver', '\w+')
        ->name('alternative.auth.redirect');

    Route::get('/auth/callback/{driver}', [SocialProvidersController::class, 'callback'])
        ->where('driver', '\w+');
});

Auth::routes();
