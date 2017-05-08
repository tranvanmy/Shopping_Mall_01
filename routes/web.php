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
Route::get('/home', 'HomeController@index')->name('home');
//Login /Logout
Route::get('authentication/getLogin', ['as' => 'getLogin', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('authentication/postLogin', ['as' => 'postLogin', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('authentication/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
//Reset Password
Route::get('authentication/Reset', ['as' => 'Reset', 'uses' => 'Auth\ForgotPasswordController@getEmail']);
//Register
Route::get('authentication/Register', ['as' => 'Register', 'uses' => 'Auth\RegisterController@getRegiter']);
//Login Facebook 
Route::get('redirect', 'Auth\LoginController@redirectToProvider');
Route::get('callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
