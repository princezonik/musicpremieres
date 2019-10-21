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
Route::model('songs', 'Song');
//Route::model('albums', 'Album');
Route::get('/', 'IndexController@index')->name('index');
Route::get('download/{downloads}', 'IndexController@download_page')->name('download');
Route::resource('/admin/uploads', 'SongController');
//Route::get('/download','IndexController@downloads')->name('downloads');
//Route::get('/home', 'HomeController@index')->name('home');
