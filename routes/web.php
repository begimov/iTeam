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

// Pages
Route::group(['prefix' => 'pages', 'namespace' => 'Pages'], function () {
    Route::get('category/{category}', 'CategoryController@index')->name('pages.category');
    Route::get('{page}', 'PageController@show')->name('pages.show');
}); 

// User dashboard & profile
Route::group(['middleware' => 'auth', 'prefix' => 'user', 'namespace' => 'Users'], function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard.index');
    Route::get('profile/settings', 'ProfileController@edit')->name('user.profile.settings');
});

// WebAPI
Route::group(['middleware' => 'auth', 'prefix' => 'webapi', 'namespace' => 'Webapi'], function () {
    // Route for Profile.vue component
    Route::post('orders/payment/signature', 'Products\OrderController@getPaymentSignature');
    Route::resource('orders', 'Products\OrderController');
});

// Company related routes
Route::group(['prefix' => 'company', 'namespace' => 'Company'], function () {
    Route::get('services', 'CompanyController@services')->name('company.services');
    Route::get('contact', 'CompanyController@contact')->name('company.contact');
    Route::get('terms', 'CompanyController@terms')->name('company.terms');
    Route::get('offer', 'CompanyController@offer')->name('company.offer');
});

Auth::routes();
