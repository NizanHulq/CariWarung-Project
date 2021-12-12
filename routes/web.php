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

Route::get('/', 'LandingPageController@index');
Route::get('/home', 'LandingPageController@index')->name('home');
Route::post('/home', 'FeedbackController@store')->name('feedback');
Route::get('/search', 'LandingPageController@search')->name('search');


Route::get('/about', 'AboutController@index')->name('about');
Route::get('/product', 'ProductController@index')->name('product');


Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{id}', 'ShopController@like')->name('like.shop');
Route::get('/detail-shop/{title}',  'ShopController@detail')->name('shop.detail');


Route::get('/contact', 'ContactController@index')->name('contact');







Auth::routes();

Route::group(['middleware'=>['admin']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/profile', 'ProfileController@index')->name('profile');


    Route::get('/product-adm', 'ProductController@view_product')->name('adm.product');
    Route::get('/product-adm/create',  'ProductController@create')->name('adm.product.create');
    Route::post('/product-adm',  'ProductController@store')->name('adm.product.store');
    Route::post('/product-adm/delete/{id}',  'ProductController@destroy')->name('adm.product.destroy');
    Route::get('/product-adm/edit{id}',  'ProductController@edit')->name('adm.product.edit');
    Route::post('/product-adm/update{id}',  'ProductController@update')->name('adm.product.update');


    Route::get('/shop-adm', 'ShopController@view_shop')->name('adm.shop');
    Route::get('/shop-adm/create',  'ShopController@create')->name('adm.shop.create');
    Route::post('/shop-adm',  'ShopController@store')->name('adm.shop.store');
    Route::post('/shop-adm/delete/{id}',  'ShopController@destroy')->name('adm.shop.destroy');
    Route::get('/shop-adm/edit{id}',  'ShopController@edit')->name('adm.shop.edit');
    Route::post('/shop-adm/update{id}',  'ShopController@update')->name('adm.shop.update');

    Route::get('/comment', 'FeedbackController@view_comment')->name('adm.feedback');

    Route::get('/ads', 'AdsController@index')->name('ads');

    

    });
