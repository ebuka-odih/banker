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

Route::view('/', 'pages.index')->name('index');
Route::view('/about', 'pages.about')->name('about');
Route::view('/credit-card', 'pages.creditcard')->name('creditcard');
Route::view('/mortages', 'pages.mortages')->name('mortages');
Route::view('/investment', 'pages.investment')->name('investment');
Route::view('/retirement', 'pages.retirement')->name('retirement');
Route::view('/services', 'pages.services')->name('services');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/contact', 'pages.contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', 'UserController@index')->name('dashboard');
    Route::get('authenticate', 'UserController@authenticate')->name('authenticate');
    Route::post('authenticated', 'UserController@authenticated')->name('authenticated');
    Route::get('user-details', 'UserController@userDetails')->name('userDetails');


});