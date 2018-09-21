<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'App\StaticsController@showHome']);


//STATICS ROUTES
Route::get('/annuaire', ['uses' => 'App\StaticsController@showAnnuaire'])->name('anuaire');
Route::get('/recherche', ['uses' => 'App\StaticsController@showSearch'])->name('search');


//EVENTS ROUTES
Route::prefix('/events')->group(function(){
    Route::get('/', ['uses' => 'App\EventsController@index']);
});



//ACCOUNT ROUTES
Route::prefix('/account')->group(function(){
    Route::get('/logout', ['uses' => 'App\AccountController@logout']);
});


Auth::routes();

