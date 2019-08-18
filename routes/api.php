<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authentication routes
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'Api\AuthController@login')->name('api.auth.login');
    Route::post('me', 'Api\AuthController@me')->name('api.auth.me');
});

// CRUD routes
Route::middleware('auth:api')->group(function () {
    Route::apiResource('posts','Api\PostController')
        ->names([
            'index' => 'api.posts.index',
            'store' => 'api.posts.store',
            'show' => 'api.posts.show',
            'update' => 'api.posts.update',
            'destroy' => 'api.posts.destroy',
        ]);

    Route::apiResource('categories', 'Api\CategoryController')
        ->names([
            'index' => 'api.categories.index',
            'store' => 'api.categories.store',
            'show' => 'api.categories.show',
            'update' => 'api.categories.update',
            'destroy' => 'api.categories.destroy',
        ]);
});

// Fallback route
Route::fallback(function () {
    return response()->json(['message' => 'Not Found.'], 404);
})->name('api.fallback');
