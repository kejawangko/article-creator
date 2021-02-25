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

Route::get('login', 'Auth\GetLoginController')->name('login');
Route::post('login', 'Auth\PostLoginController');
Route::get('logout', 'Auth\GetLogoutController')->name('logout');

Route::get('/', 'GetHomeController');

Route::prefix('articles')->group(function() {
    Route::get('/', 'Article\GetArticleController')->name('articles');
    Route::get('create', 'Article\GetCreateArticleController')->name('articles.create');
    Route::post('store', 'Article\PostStoreArticleController')->name('articles.store');
    Route::get('{id}/edit', 'Article\GetEditArticleController')->name('articles.edit');
    Route::post('{id}/update', 'Article\PostUpdateArticleController')->name('articles.update');
});
