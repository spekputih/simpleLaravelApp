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
Route::post('/', 'PagesController@getShow')->name('singlemodal');
Route::get('dashboard', ['as'=>'pages.dashboard', 'uses'=>'AdminController@getDashboard']);
Route::post('dashboard', ['as'=>'pages.dashboards', 'uses'=>'AdminController@getDashboard']);
Route::get('mail', 'PagesController@getMail');
Route::get('about','PagesController@getAbout');
Route::get('/', 'PagesController@getIndex')->name('Pages.welcome');
Route::get('singleprofile', 'UserController@getProfile');
Route::resource('profile', 'PictureController');
Route::resource('student', 'StudentController');
Route::resource('comment', 'RegisController', ['except' => ['create', 'edit', 'update']]);
Route::resource('posts', 'PostController');
Route::resource('category', 'CategoryController');
Route::get('gallery', 'PagesController@getGallery')->name('gallery.index');
Route::post('gallery/store', 'PagesController@store')->name('gallery.store');
Route::get('post-modal/{id}', 'PagesController@getModalpost')->name('postmodal');


Auth::routes();
