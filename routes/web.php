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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('admin/categories', 'CategoryController');
// Route::resource('admin/books', 'BookController');

Route::group(['middleware' => ['auth']],function(){
	Route::get('/book/add','BookController@create')->name('add_book');

	Route::post('/store','BookController@store')->name('store_book');

	Route::get('/{user}/profile','BookController@profile')->name('user_profile');

} );

Route::get('/test', 'BookController@test');
