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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('admin/categories', 'CategoryController');
// Route::resource('admin/books', 'BookController');

Route::group(['middleware' => ['auth']],function(){
	Route::get('/book/add','BookController@create')->name('add_book');

	Route::post('/store','BookController@store')->name('store_book');

	Route::get('/{user}/profile','BookController@profile')->name('user_profile');

} );

Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/books', 'BookController');
Route::resource('offer', 'OfferController');
Route::get('/test', 'BookController@test');

Route::get('chat', function () {
    return view('chat');
});
Route::get('/book/{id}', 'BookController@show')->name("show_book");

Route::post('/{id}/delete','BookController@destroy')->name('delete');
