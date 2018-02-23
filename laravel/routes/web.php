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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings', function () {
    return redirect('/settings/profile');
})->name('settings');
Route::get('/settings/profile', 'Settings\ProfileController@index')->name('settings_profile');
Route::post('/settings/profile', 'Settings\ProfileController@update')->name('settings_profile');
