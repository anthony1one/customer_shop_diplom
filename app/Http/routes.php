<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|T
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@getIndex');
Route::get('products-all', 'PagesController@getProducts');
Route::get('about', 'PagesController@getAbout');
Route::get('shops', 'PagesController@getShops');
Route::get('basket', 'PagesController@getBasket');
Route::get('product/{product_slug}', 'PagesController@getProduct');

Route::resource('admin/products', 'ProductController');