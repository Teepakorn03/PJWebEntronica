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
Route::resource('showalbum','ShowalbumController');
Route::resource('Album1','Showalbum1Controller');
Route::resource('Album2','Showalbum2Controller');
Route::resource('Album3','Showalbum3Controller');
Route::resource('Album4','Showalbum4Controller');
Route::resource('Album5','Showalbum5Controller');
Route::resource('Album6','Showalbum6Controller');
Route::resource('Album7','Showalbum7Controller');
Route::resource('Album8','Showalbum8Controller');

Route::resource('base', 'BaseController');
//Route::resource('display','ImageController');
Route::get('admin', function () {
    return view('welcome');
});

Route::resource('/', 'ShowController');

Auth::routes();
