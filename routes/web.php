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
Route::group(['prefix' => 'admin'], function () {

    // VIEW 
    Route::group(['prefix' => 'view'], function () {
        Route::get('/login', 'AdminController@login');
        Route::get('/dashboard', 'AdminController@dashboard');
        Route::get('/show-user/detail/id={id}', 'AdminController@showUserDetail');
        Route::get('/soal', 'AdminController@showSoal');
    });

    // ACTION
    Route::group(['prefix' => 'action'], function () {

        // DASHBOARD DATA USER
        Route::group(['prefix' => 'user'], function () {
            Route::get('/activate-user/id={id}', 'AdminController@activateUser')->name('activate.user');
            Route::get('/reject-user/id={id}', 'AdminController@rejectUser')->name('reject.user');
        });

        // SOAL
        Route::group(['prefix' => 'soal'], function () {
            Route::post('/create', 'SoalController@create')->name('create.soal');
            Route::post('/update/id={id}', 'SoalController@update')->name('update.soal');
            Route::get('/delete/id={id}', 'SoalController@destroy')->name('delete.soal');
        });
    });
});


// DIREKTUR GROUP
Route::group(['prefix' => 'direktur'], function () {
    Route::group(['prefix' => 'view'], function () {
        Route::get('/login', 'DirekturController@login');
        Route::get('/dashboard', 'DirekturController@dashboard');
        Route::get('/show-user/detail/id={id}', 'DirekturController@userById');
    });
});



Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'view'], function () {
        Route::get('/login', 'UserController@login_view')->name('login.view');
        Route::get('/dashboard', 'UserController@dashboard_view')->name('dashboard.view');
        Route::get('/registration', 'UserController@register_view')->name('registration.view');
        Route::get('/test', 'SoalController@indexRandom')->name('test.user');
    });

    Route::group(['prefix' => 'action'], function () {
        Route::post('/create-user', 'UserController@create')->name('register.user');
        Route::post('/login-user', 'UserController@login')->name('login.user');
        Route::post('/upload/tf', 'UserController@uploadTransfer')->name('upload.tf');
        Route::post('/koreksi/test', 'SoalController@koreksi')->name('koreksi.user');
    });
});



Route::get('/home', 'HomeController@index')->name('home');
