<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('add/admin', "Admin\AdminController@create")->name('add_admin');
    Route::post('add/admin', "Admin\AdminController@store_admin")->name('store_admin');
    Route::get('edit/admin/{id}', "Admin\AdminController@edit_admin")->name('edit_admin');
    Route::patch('edit/admin/{id}', "Admin\AdminController@update_admin")->name('update_admin');

    // User Route
    Route::get('users', 'Admin\UserController@all_users')->name('users');
    Route::get('active/users', 'Admin\UserController@active_users')->name('active_users');
    Route::get('inactive/users', 'Admin\UserController@inactive_users')->name('inactive_users');
    Route::get('admins', 'Admin\UserController@admins')->name('admins');
    Route::get('user-details/{id}', 'Admin\UserController@user_details')->name('user_details');
    Route::get('edit/user/{id}', 'Admin\UserController@edit_details')->name('edit_details');
    Route::patch('update/user/{id}', 'Admin\UserController@update_user')->name('update_user');
    Route::get('add-user', 'Admin\UserController@create')->name('add_user');
    Route::post('store/user', 'Admin\UserController@store_user')->name('store_user');
    Route::delete('user/{id}/delete', 'Admin\UserController@delete_user')->name('delete.user');
    Route::get('approve/user/{id}', "Admin\UserController@approveUser")->name('approveUser');
    Route::get('suspend/user/{id}', "Admin\UserController@suspend_user")->name('suspendUser');
    //  End of User Route
    //  Password Route
    Route::get('security', "Admin\AdminController@password")->name('password');
    Route::post('password/store', "Admin\AdminController@storePassword")->name('storePassword');

    Route::get('wire-transfer/transactions', "Admin\AdminTransfers@wireTransactions")->name('wireTransactions');
    Route::get('dom-transfer/transactions', "Admin\AdminTransfers@domTransactions")->name('domTransactions');
    Route::get('/transactions/details/{id}535675', "Admin\AdminTransfers@transferDetails")->name('transferDetails');
    Route::post('send/otp-code/{id}', 'Admin\AdminTransfers@admin_otp')->name('admin_otp');

    //  Deposits Route
    Route::get('add/deposit', "Admin\AdminDeposits@add_deposit")->name('add_deposit');
    Route::get('deposit', "Admin\AdminDeposits@deposits")->name('deposits');
    Route::post('store/deposit', "Admin\AdminDeposits@storeDeposit")->name('storeDeposit');
    Route::delete('delete/deposit/{id}', "Admin\AdminDeposits@deleteDeposit")->name('deleteDeposit');

});


