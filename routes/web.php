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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','PagesController@dashboard')->name('dashboard');
Route::get('/dashboard','PagesController@dashboard')->name('dashboard');
Route::get('/users','PagesController@users')->name('Users');
Route::get('/tables','PagesController@tableList')->name('Tables');

Route::resource('pages','ShowUsers');
Route::get('/addData','PagesController@addData')->name('AddData');


Route::get('/fileUpload','FileUploadController@fileUpload')->name('file.upload');
Route::post('fileUpload', 'FileUploadController@FileUploadPost')->name('file.upload.post');
Route::get('/json', 'JsonController@json');