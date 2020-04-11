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
Route::get('/dashboard','AdminController@dashboard');

// ADMIN GROUP
Route::group(['prefix' => 'admin/view'], function () {
    Route::get('/login', function () {
        return view('admin/login_admin');
    });
    Route::get('/dashboard', function () {
        return view('admin/dashboard_admin');
    });
    Route::get('/detail', function () {
        return view('admin/detail');
    });
    Route::get('/soal', function () {
        return view('admin/soal_admin');
    });
});


// DIREKTUR GROUP
Route::group(['prefix' => 'direktur/view'], function () {
    Route::get('/login', function () {
        return view('direktur/login_direktur');
    });
    Route::get('/dashboard', function () {
        return view('direktur/dashboard_direktur');
    });
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
