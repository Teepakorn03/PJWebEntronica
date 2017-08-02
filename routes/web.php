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
Route::resource('Home','Home_Controller');
Route::resource('Activity','ActivityController');
Route::resource('about','AboutController');
Route::resource('jobapps','JobappController');
Route::resource('Footers','FootersController');
Route::resource('logintest','LoginController');

Route::resource('base', 'BaseController');
//Route::resource('display','ImageController');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('show', 'ShowController');


Route::get('/hello', function() {
  return "Hello Laravel 5.3";
});

Route::get('upload','ImageController@index');
Route::post('upload','ImageController@upload');
Route::get('display','ImageController@show');


Route::get('from', 'Auth\LoginController@from');
Route::get('entronica', 'EntronicaController@index');
Route::get('dataa', 'Information\DataController@index');
Route::get('service', 'ServiceController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
