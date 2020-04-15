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

// LOGIN
Route::group(['prefix' => 'auth'], function () {
    Route::post('user/', 'UserController@login');
    Route::post('logout/', 'UserController@logout');
});

// UPLOAD USER ROUTE

Route::group(['prefix' => 'user'], function () {
    Route::post('/upload/tf', 'UserController@uploadTransfer');
});

// USER ROUTE
Route::group(['prefix' => 'admin'], function () {
    Route::get('/show-user/all', 'UserController@index');
    Route::get('/show-user/id={id}', 'UserController@indexById');
    Route::post('/create-user', 'UserController@createUser');
    Route::get('/activate-user/id={id}', 'UserController@activateUser');
    Route::get('/reject-user/id={id}', 'UserController@rejectUser');
});

// SOAL ROUTE
Route::group(['prefix' => 'soal'], function () {
    Route::get('/all', 'SoalController@indexRandom');
    Route::post('/create', 'SoalController@create');
    Route::post('/koreksi', 'SoalController@correct');
    Route::post('/update/id={id}', 'SoalController@update');
    Route::get('/delete/id={id}', 'SoalController@destroy');
});
// FORCES HTTPS SCHEMA
if (App::environment('production')) {
    URL::forceScheme('https');
}
