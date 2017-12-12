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

Route::get('/', 'Home\HomeController@index')->name('home');

// User dashboard & profile
Route::group(['middleware' => 'auth', 'prefix' => 'user', 'namespace' => 'Users'], function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard.index');
    Route::get('profile/settings', 'ProfileController@edit')->name('user.profile.settings');
});

// WebAPI
Route::group(['middleware' => 'auth', 'prefix' => 'webapi', 'namespace' => 'Webapi'], function () {
    // Route for Profile.vue component
    Route::resource('orders', 'Products\OrderController');
});

Auth::routes();
