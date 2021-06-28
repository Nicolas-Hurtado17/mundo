<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('welcome', 'JsonController@index');

Route::get('provincia/{id}', 'JsonController@getProvincia');

Route::get('ciudad/{id}', 'JsonController@getCiudades');
Route::get('calle/{id}', 'JsonController@getCalles');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

