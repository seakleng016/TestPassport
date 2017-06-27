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

Route::post('register', 'Api\Auth\RegisterController@register');
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('refresh', 'Api\Auth\LoginController@refresh');


Route::get('test', function () {
    return 1;
});


Route::middleware('auth:api')->group(function() {

    Route::post('logout','Api\Auth\LoginController@logout');
});
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return "leng";
//
//});
