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

// route for the information and the user
Route::resource('information', 'infoController');
Route::post('register', 'userController@store');


// route for the login and ect auth
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
    
});

// route for the plan auth
Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('plan', 'planController');
    Route::resource('user', 'userController', ['except' => ['store']]);
});

// route for the notification
Route::get('notify/index/{id}', 'NotificationController@index');
// Route::get('notify/destroy/{id}', 'NotificationController@destroy');
