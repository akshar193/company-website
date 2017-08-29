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
Route::get('/','FrontController@index')->name('front');

Route::get('/send','EmailController@index')->name('email');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
	Route::get('/',function(){
		return view('admin1');
	})->name('admin.index');

	Route::get('/test','AdminController@test')->name('admin.test');
	Route::get('/datatable','ContactUsController@contactTable')->name('datatable');
	Route::get('/ContactData','ContactUsController@ContactData')->name('ContactData');
	



});