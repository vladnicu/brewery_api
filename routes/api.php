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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', 'RegisterController@register');

Route::group(['prefix' => 'breweries'], function() {
    Route::get('/', 'BreweryController@index')->middleware('auth:api');
    Route::get('/{brewery}', 'BreweryController@show')->middleware('auth:api');
    Route::post('/', 'BreweryController@store')->middleware('auth:api');
    Route::patch('/{brewery}', 'BreweryController@update')->middleware('auth:api');
    Route::delete('/{brewery}', 'BreweryController@destroy')->middleware('auth:api');

});



