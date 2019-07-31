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

Route::prefix('home')->group(function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/profile/{id}', 'HomeController@profile')->name('user.profile');
    Route::get('/edit/{id}', 'HomeController@edit')->name('user.profile.edit');
    Route::put('/edit/{id}', 'HomeController@store')->name('user.profile.store');
});

Route::prefix('company')->group(function() {
    Route::get('/' , 'CompanyController@index')->name('company');
    Route::get('/profile/{id}', 'CompanyController@profile')->name('company.profile');
    Route::get('/edit/{id}', 'CompanyController@edit')->name('company.profile.edit');
    Route::put('/edit/{id}', 'CompanyController@store')->name('company.profile.store');

    Route::get('/login' , 'Auth\CompanyLoginController@ShowLoginForm')->name('company.login');
    Route::post('/login' , 'Auth\CompanyLoginController@Login')->name('company.login.save');
    Route::get('/register' , 'Auth\CompanyRegisterController@showRegistrationForm')->name('company.register');
    Route::post('/register' , 'Auth\CompanyRegisterController@register')->name('company.register.save');
    Route::post('/password/email', 'Auth\CompanyForgotPasswordController@sendResetLinkEmail')->name('company.password.email');
    Route::get('/password/reset', 'Auth\CompanyForgotPasswordController@showLinkRequestForm')->name('company.password.request');
    Route::post('/password/reset', 'Auth\CompanyResetPasswordController@reset')->name('company.password.update');
    Route::get('/password/reset/{token}', 'Auth\CompanyResetPasswordController@showResetForm')->name('company.password.reset');
});

