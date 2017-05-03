<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//All Api Part
Route::group(['prefix' => 'api/v1/','middleware' => ['api']], function(){
    //User Auth Part
    Route::post('logout/', 'ApiAuthController@logoutUser');
    Route::post('login/', 'ApiAuthController@loginUser');
    Route::post('register/', 'ApiAuthController@registerUser');
});