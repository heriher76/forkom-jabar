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

Route::get('/', 'PagesController@home');
Route::get('/profile', 'PagesController@profile');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/news', 'PagesController@news');
Route::get('/work-program', 'PagesController@workProgram');
Route::get('/service', 'PagesController@service');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', 'Admin\AdminPagesController@index');
	Route::resource('/users', 'Admin\UserAdminController');
	Route::resource('/gallery', 'Admin\GalleryAdminController');
	Route::resource('/news', 'Admin\NewsAdminController');
});