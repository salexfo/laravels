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
Route::get('foo', function () {
    return 'Hello World';
});
Route::get('user', 'UsersController@index');
Route::get('users', 'UsersController@index');

Route::get('/oauth/gmail', function (){
	return LaravelGmail::redirect();
});

Route::get('/oauth/gmail/callback', function (){
	LaravelGmail::makeToken();
	return redirect()->to('/');
});

Route::get('/oauth/gmail/logout', function (){
	LaravelGmail::logout(); //It returns exception if fails
	return redirect()->to('/');
});

