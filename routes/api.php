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

// // LOGIN
// Route::group(['prefix' => 'auth'], function () {
//     Route::post('user/', 'UserController@login');
//     Route::post('logout/', 'UserController@logout');
// });


// FORCES HTTPS SCHEMA
if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::group(['prefix' => 'user'], function () {
    Route::post('/koreksi/test', 'SoalController@koreksi')->name('api.koreksi.user');
});
