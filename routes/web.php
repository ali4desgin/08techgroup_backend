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

Route::match(['get', 'post'],'/', "AdminController@index");

Route::group(['middleware'=>'AdminLogin'], function(){
    Route::match(['get', 'post'],'/dashboard', 'DashboardController@index');

    // packages routes
    Route::match(['get', 'post'],'/packages', 'PackageController@index');
    Route::match(['get', 'post'],'/view_package/{package_id}', 'PackageController@view');
});



