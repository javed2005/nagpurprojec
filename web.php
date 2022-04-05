<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Auth::routes();
// Auth::routes(['login' => false, 'register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/signin', 'CommonLoginController@getLogin')->name('signin');

//set plan in session
Route::post('/set-plan', 'FrontController@setPlan')->name('setPlan');


// Route::get('/login', 'CommonLoginController@getLogin')->name('login');
Route::post('/post-login', 'CommonLoginController@postLogin')->name('postLogin');
Route::post('/send-otp', 'Auth\RegisterController@send_otp')->name('send_otp');
Route::post('/verify-otp', 'Auth\RegisterController@verify_otp')->name('verify_otp');

//share link
Route::get('/{str}', 'HomeController@sharedTemplate')->name('sharedTemplate');
