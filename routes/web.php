<?php

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
    return view('pages.dashboard');
});

Route::view('login', 'auth.login')->name('login');


Route::view('register', 'auth.register')->name('register');


Route::view('reset', 'auth.reset')->name('reset');


Route::post('store','AuthController@store')->name('store');


Route::post('resetaction','AuthController@resetaction')->name('resetaction');

Route::post('logs','AuthController@logs')->name('logs');