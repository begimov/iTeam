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
    Route::get('category/{category}', 'PageController@index')->name('pages.category.index');
    Route::get('{page}', 'PageController@show')->name('pages.show');
}); 

// User dashboard & profile
Route::group(['middleware' => 'auth', 'prefix' => 'user', 'namespace' => 'Users'], function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard.index');
    Route::get('profile/settings', 'ProfileController@edit')->name('user.profile.settings');
});

// WebAPI
Route::group(['prefix' => 'webapi', 'namespace' => 'Webapi'], function () {
    Route::post('magnets/register', 'Pages\MagnetController@register');
});

Route::group(['middleware' => 'auth', 'prefix' => 'webapi', 'namespace' => 'Webapi'], function () {
    // Route for Profile.vue component
    Route::post('orders/payment/signature', 'Products\OrderController@getPaymentSignature');
    Route::resource('orders', 'Products\OrderController');
    Route::resource('files', 'Content\FileController');
});

// Company related routes
Route::group(['prefix' => 'company', 'namespace' => 'Company'], function () {
    Route::get('services', 'CompanyController@services')->name('company.services');
    Route::get('contact', 'CompanyController@contact')->name('company.contact');
    Route::get('terms', 'CompanyController@terms')->name('company.terms');
    Route::get('offer', 'CompanyController@offer')->name('company.offer');

    Route::group(['prefix' => 'rm'], function () {
        Route::get('/', 'RmController@index')->name('company.rm.index');
        Route::get('model', 'RmController@model')->name('company.rm.model');
        Route::get('origins', 'RmController@origins')->name('company.rm.origins');
        Route::get('project', 'RmController@project')->name('company.rm.project');
    });
});

Auth::routes();

// Webhooks
Route::group(['prefix' => 'webhooks', 'namespace' => 'Webhooks'], function () {
    Route::post('walletone', 'WalletOneWebhookController@handleWebhook');
});
