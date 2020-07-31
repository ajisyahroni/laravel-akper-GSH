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
})->name('landing.page');

/*
----------------------------------------------------------------------
ADMIN ROUTE 
----------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function () {

    // VIEW 
    Route::group(['prefix' => 'view'], function () {
        Route::get('/login', 'AdminController@login_view')->name('login.admin.view');
        Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard.admin.view');
        Route::get('/show-user/detail/id={id}', 'AdminController@showUserDetail');
        Route::get('/soal', 'AdminController@showSoal');
        Route::get('/pengaturan', 'AdminController@pengaturan')->name('pengaturan.admin.view');
    });

    // ACTION
    Route::group(['prefix' => 'action'], function () {
        Route::post('/login-admin', 'AdminController@login')->name('login.admin');
        Route::get('/logout-admin', 'AdminController@logout')->name('logout.admin');

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

        Route::group(['prefix' => 'pengaturan'], function () {
            Route::post('/change-pass', 'AdminController@changePassword')->name('change.password.admin');
        });
    });
});


/*
----------------------------------------------------------------------
DIREKTUR ROUTE 
----------------------------------------------------------------------
*/
Route::group(['prefix' => 'direktur'], function () {
    // VIEW
    Route::group(['prefix' => 'view'], function () {
        Route::get('/login', 'DirekturController@login_view')->name('login.direktur.view');
        Route::get('/dashboard', 'DirekturController@dashboard')->name('dashboard.direktur.view');
        Route::get('/show-user/detail/id={id}', 'DirekturController@userById');
        Route::get('/pengaturan', 'DirekturController@pengaturan')->name('pengaturan.direktur.view');
    });

    // ACTION
    Route::group(['prefix' => 'action'], function () {
        Route::post('/login-direktur', 'DirekturController@login')->name('login.direktur');
        Route::get('/logout-direktur', 'DirekturController@logout')->name('logout.direktur');
        Route::post('/change-pass', 'DirekturController@changePassword')->name('change.password.direktur');
    });
});


/*
----------------------------------------------------------------------
USER ROUTE 
----------------------------------------------------------------------
*/
Route::group(['prefix' => 'user'], function () {
    // VIEW
    Route::group(['prefix' => 'view'], function () {
        Route::get('/login', 'UserController@login_view')->name('login.view');
        Route::get('/dashboard', 'UserController@dashboard_view')->name('dashboard.view')->middleware('auth');
        Route::get('/registration', 'UserController@register_view')->name('registration.view');
        // Route::get('/test', 'SoalController@indexRandom')->name('test.user')->middleware('auth');
        // TODO finishing this test
        Route::get('/test', 'SoalControllerTry@indexRandom')
            ->name('test.user')
            ->middleware('auth');
    });

    // ACTIONS
    Route::group(['prefix' => 'action'], function () {
        Route::get('/logout', 'UserController@logout')->name('logout.user');
        Route::post('/create-user', 'UserController@create')->name('register.user');
        Route::post('/login-user', 'UserController@login')->name('login.user');
        Route::post('/upload/tf', 'UserController@uploadTransfer')->name('upload.tf');
        Route::post('/koreksi/test', 'SoalController@koreksi')->name('koreksi.user');
    });
});



Route::get('/home', 'HomeController@index')->name('home');
