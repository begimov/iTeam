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

    //Themes
    Route::get('category/{category}/themes/{theme}', 'ThemeController@index')->name('theme.index');
}); 

// Free products
Route::group(['middleware' => 'products', 'prefix' => 'products', 'namespace' => 'Products'], function () {
    Route::get('{product}', 'ProductController@show')->name('products.show');
    Route::get('{product}/materials/{material}/files/{file}', 'ProductController@download');
}); 

// MPs level material pages
Route::group(['middleware' => 'materials', 'prefix' => 'materials', 'namespace' => 'Products'], function () {
    Route::get('{material}/{code}', 'MaterialController@show');
    Route::get('{material}/{code}/files/{file}', 'MaterialController@download');
}); 

// Tests
Route::group(['middleware' => 'auth', 'prefix' => 'tests', 'namespace' => 'Tests'], function () {
    Route::get('{test}', 'TestController@show')->name('tests.show');
}); 

// User dashboard & profile
Route::group(['middleware' => 'auth', 'prefix' => 'user', 'namespace' => 'Users', 'as' => 'user.'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::get('profile/settings', 'ProfileController@edit')->name('profile.settings');
    Route::post('profile/settings', 'ProfileController@store')->name('profile.settings.store');

    Route::post('profile/settings/password', 'PasswordController@store')->name('profile.settings.password.store');
});

// WebAPI
Route::group(['prefix' => 'webapi', 'namespace' => 'Webapi'], function () {
    // Magnets
    Route::post('magnets/subscribe', 'Pages\MagnetController@subscribe');
});

Route::group(['middleware' => 'auth', 'prefix' => 'webapi', 'namespace' => 'Webapi'], function () {
    // Payment routes
    Route::post('orders/payments/walletone/signature', 'Payments\WalletOnePaymentController@getPaymentSignature');
    Route::get('orders/payments/invoices/create', 'Payments\InvoiceController@create');
    Route::post('orders/{id}/payments/invoices', 'Payments\InvoiceController@store');
    Route::get('orders/payments/invoices/{fileName}', 'Payments\InvoiceController@show')->name('orders.invoices.show');
    
    // Dashboard routes
    Route::resource('orders', 'Products\OrderController');
    Route::resource('files', 'Content\FileController');

    // Tests
    Route::get('tests/{test}', 'Tests\TestController@show');
    Route::post('tests/{test}/results', 'Tests\TestResultController@store');
    Route::get('tests/{test}/results/{result}/certificates/{certificate}/{name?}', 'Tests\TestCertificateController@show');
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

    Route::group(['prefix' => 'projects'], function () {
        Route::get('/', 'ProjectController@index')->name('company.projects.index');
    });

    Route::group(['prefix' => 'reviews'], function () {
        Route::get('/', 'ReviewController@index')->name('company.reviews.index');
    });
});

Auth::routes();

// Webhooks
Route::group(['prefix' => 'webhooks', 'namespace' => 'Webhooks'], function () {
    Route::post('walletone', 'WalletOneWebhookController@handleWebhook');
});
