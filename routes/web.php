<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing_page');
});

// ADMIN GROUP
Route::group(['prefix' => 'admin/view'], function () {
    Route::get('/login', function () {
        return view('admin/login_admin');
    });
    Route::get('/dashboard', 'UserController@index');
    Route::get('/detail/id={id}', 'UserController@indexById');
    Route::get('/soal', 'SoalController@index');
});


// DIREKTUR GROUP
Route::group(['prefix' => 'direktur/view'], function () {
    Route::get('/login', function () {
        return view('direktur/login_direktur');
    });
    Route::get('/dashboard', 'DirekturController@dashboard');
    Route::get('/detail/id={id}', 'DirekturController@indexById');
});

Route::group(['prefix' => 'user/view'], function () {
    Route::get('/login', function () {
        return view('user/login_user');
    });
    Route::get('/dashboard', function () {
        return view('user/dashboard_user');
    });
    Route::get('/registration', function () {
        return view('user/registration_user');
    });
    Route::get('/test', function () {
        return view('user/test_user');
    });
});
