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
// users routes
Route::get('/home', 'HomeController@index');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');


Route::group(['middleware' => 'auth'], function() {

    // profile routes
	Route::get('/profile','ProfileUserController@index');

});


// admin routes
Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');

Route::get('/logout', 'Auth\AdminLoginController@logout')->name("admin.logout");

// Pssword ressets routes

Route::post('/password/email','Auth\adminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');


Route::get('/password/reset','Auth\adminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');


Route::post('/password/reset','Auth\adminResetPasswordController@reset');


Route::get('/password/reset/{token}','Auth\adminResetPasswordController@showResetForm')->name('admin.password.reset');


});


