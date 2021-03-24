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

Route::prefix('user')->group(function() {
    Route::get('/', 'UserController@index');
    Route::get('/', 'UserProfileController@index')->name('get_user.profile');
    Route::prefix('user')->group(function() {
        Route::get('/', 'UserProductController@index')->name('get_user.product.index');
    });
});
