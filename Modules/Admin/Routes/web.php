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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
    Route::prefix('product')->group(function() {
        Route::get('/', 'AdminProductController@index')->name('get_admin.product.index');
    });
    Route::prefix('user')->group(function() {
        Route::get('/', 'AdminUserController@index')->name('get_admin.user.index');
    });
    Route::prefix('category')->group(function() {
        Route::get('/', 'AdminCategoryController@index')->name('get_admin.category.index');
    });
    Route::prefix('location')->group(function() {
        Route::get('/', 'AdminLocationController@index')->name('get_admin.location.index');
    });
});
