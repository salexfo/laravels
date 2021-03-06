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
    return view('gmail');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gmail', 'GmailController@index')->name('Gmail');
Route::get('foo', function () {
    return 'Hello World';
});
Route::get('users', 'UsersController@index');
Route::get('user', 'UsersController@user');

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

