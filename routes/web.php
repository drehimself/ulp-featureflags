<?php

use YlsIdeas\FeatureFlags\Facades\Features;

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
    // Features::turnOff('my-feature');
    dd(Features::accessible('my-feature'));
    return view('welcome');
});

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@create')->name('users.create')->middleware('feature:my-feature');
Route::post('/users', 'UsersController@store')->name('users.store')->middleware('feature:my-feature');
