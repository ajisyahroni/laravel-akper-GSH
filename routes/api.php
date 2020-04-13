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


// USER ROUTE
Route::group(['prefix' => 'user'], function () {
    Route::post('/create', 'UserController@createUser');
    Route::post('/activate/id={id}', 'UserController@activateUser');
});

// SOAL ROUTE
Route::group(['prefix' => 'soal'], function () {
    Route::get('/all', 'SoalController@indexRandom');
    Route::post('/create', 'SoalController@create');
    Route::post('/koreksi', 'SoalController@correct');
    Route::put('/update/id={id}', 'SoalController@update');
    Route::delete('/delete/id={id}', 'SoalController@destroy');
});
