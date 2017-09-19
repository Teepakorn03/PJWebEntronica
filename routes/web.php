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
Route::resource('Footers','FootersController');
Route::resource('logintest','LoginController');
Route::resource('showalbum','ShowalbumController');
Route::resource('showalbum2','album2Controller');
Route::resource('showalbum3','album3Controller');
Route::resource('showalbum4','album4Controller');
Route::resource('showalbum5','album5Controller');
Route::resource('showalbum6','album6Controller');
Route::resource('showalbum7','album7Controller');
Route::resource('showalbum8','album8Controller');
Route::resource('showalbum9','album9Controller');
Route::resource('Album1','Showalbum1Controller');
Route::resource('Album2','Showalbum2Controller');
Route::resource('Album3','Showalbum3Controller');
Route::resource('Album4','Showalbum4Controller');
Route::resource('Album5','Showalbum5Controller');
Route::resource('Album6','Showalbum6Controller');
Route::resource('Album7','Showalbum7Controller');
Route::resource('Album8','Showalbum8Controller');

Route::resource('base', 'BaseController');
Route::resource('form','JobController');
Route::resource('jobapp','JobappController');
//Route::resource('display','ImageController');
Route::get('admin', function () {
    return view('welcome');
});

Route::resource('/', 'ShowController');

Auth::routes();
