<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('merchant.index');
});

Route::get('merchant-login','LoginMerchantController@getLogin');

Route::post('merchant-login','LoginMerchantController@postLogin');

Route::controller('merchant','MerchantController');

Route::get('level', function(){
	return View::make('merchant.create-level-card');
});