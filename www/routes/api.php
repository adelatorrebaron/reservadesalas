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


// El prefijo real es /api/v1/
Route::group(array('prefix' => 'v1'), function()
{

    Route::get('diasfestivos', 'DiasFestivosController@index')->name('diasfestivos.index');
    Route::post('diasfestivos', 'DiasFestivosController@create')->name('diasfestivos.create');

});