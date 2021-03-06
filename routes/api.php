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

Route::middleware('auth:api')->group(function () {
    
    Route::get('albums', 'AlbumsController@index');
    Route::post('/register', 'AuthController@register');
	
	Route::post('/logout', 'AuthController@logout');
	Route::get('user', 'AuthController@user');	
});
Route::post('/login', 'AuthController@login');