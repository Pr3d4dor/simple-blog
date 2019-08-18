<?php

use Illuminate\Http\Request;

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
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'Api\AuthController@login');
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('me', 'Api\AuthController@me');
});

// CRUD routes
Route::middleware('auth:api')->group(function () {
    Route::apiResources([
        'posts' => 'Api\PostController',
        'categories' => 'Api\CategoryController'
    ]);
});

// Fallback route
Route::fallback(function () {
    return response()->json(['message' => 'Not Found.'], 404);
})->name('api.fallback');
