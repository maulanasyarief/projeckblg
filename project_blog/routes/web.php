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
Route::get('upload-gambar', 'ImageController@create');
Route::post('upload-gambar', 'ImageController@upload');

Route::resource('/', 'VisitorController');
//router view artikel
Route::get('/post/{id}', 'VisitorController@showPage');
Route::get('/home', 'VisitorController@index');
// router add komentar di artikel
Route::get('add_comment/{id}','VisitorController@add_comment');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
	Route::resource('/post','PostController');	
	Route::get('/lihatpos/{id}', 'PostController@poslihat');
	Route::post('/delete','PostController@destroyall');
	
	Route::get('/delete_vcoment/{id}','VisitorController@del_comment');
	
	Route::post('/delete_comment','komentarController@destroyall');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/comment','komentarController@index');   
});

Auth::routes();

