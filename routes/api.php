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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth/v1',
], function () {

    Route::post('createprofile', 'API\ApiController@createProfile');

    Route::get('getcountries', 'API\ApiController@getCountries');

    Route::get('getAllVideos', 'API\ApiController@getAllVideos');

    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::post('uploadvideo', 'API\ApiController@uploadVideo');

        Route::get('getAllAccounts', 'API\ApiController@getAllAccounts');

        Route::post('uploadAudio', 'API\ApiController@uploadAudio');

        Route::post('uploaddocument', 'API\ApiController@uploadDocument');

        Route::get('getspecificaccount', 'API\ApiController@getSpecificAccount');

        Route::get('getspecificaccountvideos', 'API\ApiController@getSpecificAccountVideos');

        Route::post('test', 'API\ApiController@test');

    });
});