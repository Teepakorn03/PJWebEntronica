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
Route::resource('product','ProductController');
Route::resource('partner','PartnerController');
Route::resource('home','Home_Controller');
Route::resource('Activity','ActivityController');
Route::resource('about','AboutController');
Route::resource('jobapp','JobappController');
Route::resource('Footers','FootersController');
Route::resource('logintest','LoginController');

Route::resource('base', 'BaseController');
//Route::resource('display','ImageController');
Route::get('admin', function () {
    return view('welcome');
});

Route::resource('/', 'ShowController');

Auth::routes();
