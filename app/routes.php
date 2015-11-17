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
Route::get('khoi-tao-the', function()
{
	return View::make('merchant.index');
});
Route::get('gui-tin-nhan', function()
{
	return View::make('merchant.index');
});
Route::get('/', function()
{
	return View::make('merchant.index');
});
Route::get('/', function()
{
	return View::make('merchant.index');
});
Route::get('/', function()
{
	return View::make('merchant.index');
});
Route::get('/', function()
{
	return View::make('merchant.index');
});
Route::get('/', function()
{
	return View::make('merchant.index');
});

Route::controller('merchant','LoginMerchantController');
Route::get('create-card', function(){
	return View::make('merchant.create-card');
});