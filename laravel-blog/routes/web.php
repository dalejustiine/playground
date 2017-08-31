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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'BlogController@index');
Route::get('/post', function(){
	echo ';)';
});
Route::get('/post/{id}', 'BlogController@show');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
	Route::get('/', 'HomeController@index');

	Route::resource('/post', 'PostController');    

	Route::get('/post/{id}/delete', 'PostController@showDelete');

	Route::get('/api/post', 'PostController@getAllPosts');	

});

Auth::routes();