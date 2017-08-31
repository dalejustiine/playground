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

Route::group([/*'prefix' => 'admin',*/ 'middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/api/user', 'UserController@getUsers')->name('user.getall');

    Route::resource('/user', 'UserController');
    Route::get('/user/{id}/delete', 'UserController@showDelete')->name('user.showdelete');

});

Auth::routes();
