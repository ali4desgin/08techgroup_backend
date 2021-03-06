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


// forntend routes
Route::match(['get','post'],"/","FrontEnd\HomeController@index");
Route::match(['get','post'],"register","FrontEnd\HomeController@register");


Route::match(['get','post'],"checkout","FrontEnd\PaymentsController@index");




// admin panel routes
Route::group(['prefix' => 'adminpanel'],function(){
	
	

	Route::group(['middleware'=>'AdminAlreadyRegistered'], function(){
	    Route::match(['get', 'post'],'/', "BackEnd\AdminController@index");
	});
	
	Route::group(['middleware'=>'AdminLogin'], function(){
	    Route::match(['get', 'post'],'/dashboard', 'BackEnd\DashboardController@index');

	    // packages routes
	    Route::match(['get', 'post'],'/packages', 'BackEnd\PackageController@index');
		Route::group(['prefix' => 'package'],function(){ 
			Route::match(['get', 'post'],'/delete/{package_id}', 'BackEnd\PackageController@delete');
			Route::match(['get', 'post'],'/edit/{package_id}', 'BackEnd\PackageController@edit');
			Route::match(['get', 'post'],'/view/{package_id}', 'BackEnd\PackageController@view');
			Route::post('/add_daily_profit', 'BackEnd\PackageController@add_daily_profit');
			Route::match(['get', 'post'],'edit/{package_id}', 'BackEnd\PackageController@edit');
			Route::match(['get', 'post'],'/features/{package_id}', 'BackEnd\PackageController@features');
			Route::get('/remove_feature/{feature_id}', 'BackEnd\PackageController@remove_feature');
		});
		
		
		
	
	    // customer routes
	    Route::match(['get', 'post'],'/customers', 'BackEnd\CustomerController@index');
		
		Route::group(['prefix' => 'customer'],function(){ 
			Route::match(['get', 'post'],'/delete/{customer_id}', 'BackEnd\CustomerController@delete');
			Route::match(['get', 'post'],'/edit/{customer_id}', 'BackEnd\CustomerController@edit');
			Route::match(['get', 'post'],'/view/{customer_id}', 'BackEnd\CustomerController@view');
			Route::match(['get', 'post'],'/payments/{customer_id}', 'BackEnd\CustomerController@payments');
		});
		
		
		
		
		// profits
	    Route::match(['get', 'post'],'/daily_profits', 'BackEnd\ProfitsController@daily_profits');
		
		
		
		Route::group(['prefix' => 'ajax'],function(){ 
			Route::match(['get', 'post'],'/package/details/{package_id}', 'BackEnd\PackageController@package_json_details');
		});
		
		
		// ajax pages 
		Route::group(['prefix' => 'ajax'],function(){ 
			Route::match(['get', 'post'],'/package/details/{package_id}', 'BackEnd\PackageController@package_json_details');
		});
		
		
		
		
		// content pages
		Route::group(['prefix' => 'content'],function(){ 
			Route::match(['get', 'post'],'/','BackEnd\ContentController@index');
		});
		
		
		
		// payments gateways
		Route::group(['prefix' => 'paymentsgateways'],function(){ 
			Route::match(['get', 'post'],'/','BackEnd\DashboardController@payments_gateways');
		});
		
		Route::match(['get','post'],"gateway/{payment_id}",'BackEnd\DashboardController@gateway');
		
		Route::match(['get','post'],"notifiactions",'BackEnd\DashboardController@notifiactions');
		
		Route::get("notificationreaded/{notification_id}",'BackEnd\DashboardController@read_notify');
		
		
		
		
		
		
		
		//payments
		Route::get("payments",'BackEnd\PaymentsController@index');
		
		
		
		//advertisers
		Route::get("advertisers",'BackEnd\AdvertisersController@index');
		
		
		// logout
		
		Route::get("logout","BackEnd\AdminController@logout");
	});
	
	
});



