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
include 'admin.php';

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', 'UserController@index')->name('dashboard');
    Route::get('authenticate', 'UserController@authenticate')->name('authenticate');
    Route::post('authenticated', 'UserController@authenticated')->name('authenticated');
    Route::get('user-details', 'UserController@userDetails')->name('userDetails');
    Route::get('security', 'UserController@security')->name('security');
    Route::post('change-password', 'UserController@storePassword')->name('storePassword');
    Route::post('change-pin', 'UserController@changePin')->name('changePin');


    Route::get('transfer', 'TransferController@transfer')->name('transfer');
    Route::get('transfer/history', 'TransferController@history')->name('history');
    Route::get('process/transfer/', 'TransferController@prcoessTransfer')->name('prcoessTransfer');
    Route::post('process/transfer/', 'TransferController@processWireTransfer')->name('processWireTransfer');
    Route::get('confirm/transfer/{id}8361', 'TransferController@confirmTransfer')->name('confirmTransfer');
    Route::post('confirm/transfer/{id}8361', 'TransferController@confirmOtp')->name('confirmOtp');
    Route::get('transfer/success/{id}8361', 'TransferController@transferSuccess')->name('transferSuccess');
    Route::get('domestic/transfer/', 'TransferController@domTransfer')->name('domTransfer');
    Route::get('confirm/transfer/{id}', 'TransferController@confirmAccount')->name('confirmAccount');
    Route::post('confirm/domestic/transfer/', 'TransferController@storeMobileTransfer')->name('storeMobileTransfer');

    Route::get('deposit/history', 'CreditController@credit')->name('credit');
});
