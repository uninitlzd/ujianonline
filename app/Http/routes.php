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
    return view('core');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('login', function() {
        return view('admin/login');
    });
});

Route::group(['prefix' => 'user'], function() {
    Route::get('login', function() {
        return view('user/login');
    });
    Route::get('profile', function() {
        return view('user/profile');
    });
});
