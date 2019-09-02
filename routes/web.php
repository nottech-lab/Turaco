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

Route::get('/reset', function () {
    return view('Authviews.passwordreset');
});

Route::get('/register', function () {
    return view('Authviews.Register');
});

Route::get('/login', function () {
    return view('Authviews.login');
});
Route::post('/store', 'UserController@store')->name('store');


Route::post('/logs', 'UserController@logs')->name('logs');


Route::post('/resetaction', 'UserController@resetaction')->name('resetaction');