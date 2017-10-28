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
//Main
Route::get('/', 'MainController@index');
Route::get('/403', 'MainController@Forbidden');
//Change Pass
Route::get('change-password', function() {return view('auth.change-password'); });
Route::post('change-password', 'Auth\UpdatePasswordController@update');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'admin']], function ()
  {
      Route::get('/admin', 'AdminController@index');
  });