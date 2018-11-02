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

Route::group(['prefix' => 'adminpanel'],function(){
	
	

	Route::group(['middleware'=>'AdminAlreadyRegistered'], function(){
	    Route::match(['get', 'post'],'/', "AdminController@index");
	});
	
	Route::group(['middleware'=>'AdminLogin'], function(){
	    Route::match(['get', 'post'],'/dashboard', 'DashboardController@index');

	    // packages routes
	    Route::match(['get', 'post'],'/packages', 'PackageController@index');
		Route::group(['prefix' => 'package'],function(){ 
			Route::match(['get', 'post'],'/delete/{package_id}', 'PackageController@delete');
			Route::match(['get', 'post'],'/edit/{package_id}', 'PackageController@edit');
			Route::match(['get', 'post'],'/view/{package_id}', 'PackageController@view');
			Route::post('/add_daily_profit', 'PackageController@add_daily_profit');
		});
		
		
		
	
	    // customer routes
	    Route::match(['get', 'post'],'/customers', 'CustomerController@index');
		
		Route::group(['prefix' => 'customer'],function(){ 
			Route::match(['get', 'post'],'/delete/{customer_id}', 'CustomerController@delete');
			Route::match(['get', 'post'],'/edit/{customer_id}', 'CustomerController@edit');
			Route::match(['get', 'post'],'/view/{customer_id}', 'CustomerController@view');
		});
		
		
		// profits
	    Route::match(['get', 'post'],'/daily_profits', 'ProfitsController@daily_profits');
		
		
		
		Route::group(['prefix' => 'ajax'],function(){ 
			Route::match(['get', 'post'],'/package/details/{package_id}', 'PackageController@package_json_details');
		});
		
		
		// ajax pages 
		Route::group(['prefix' => 'ajax'],function(){ 
			Route::match(['get', 'post'],'/package/details/{package_id}', 'PackageController@package_json_details');
		});
		
		
	});
	
	
});



