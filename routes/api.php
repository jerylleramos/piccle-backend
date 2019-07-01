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

// Auth routes
Route::prefix('auth')->group(function () {
    Route::post('login', 'Api\AuthController@login')->name('auth.login');
    Route::post('register', 'Api\AuthController@register')->name('auth.register');
});

// Admin routes
Route::middleware('auth:api')->prefix('user')->group(function () {
    Route::get('me', 'Api\AuthController@getAuthenticatedUser')->name('user.me');
});
