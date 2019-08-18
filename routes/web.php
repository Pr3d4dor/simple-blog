<?php

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

// Authentication routes
Route::get('login', 'Web\LoginController@showLoginForm')->name('login');
Route::post('login', 'Web\LoginController@login');
Route::post('logout', 'Web\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resources([
        'categories' => 'Web\CategoryController',
        'posts' => 'Web\PostController',
    ]);
});

Route::permanentRedirect('/', '/posts');
