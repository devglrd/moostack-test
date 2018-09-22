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

Route::middleware('auth:api')->group(function (){
    Route::get('/competences', ['uses' => "Api\AccountController@getCompetences"]);
    Route::get('/evaluations', ['uses' => "Api\AccountController@getNotes"]);
    Route::get('/documents', ['uses' => "Api\AccountController@getDocument"]);
    Route::get('/account', ['uses' => "Api\AccountController@getAccount"]);
});

Route::get('/events', ['uses' => "Api\EventsController@index"]);
Route::post('/users/oauth', ['uses' => "Api\ApiController@userOauthInfo"]);