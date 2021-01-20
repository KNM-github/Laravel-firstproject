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
    return view('backend');
});


Route::resource('act','activityController');

Route::resource('post','PostController');

Route::resource('school','SchoolController');

Route::get('autocomplete','PostController@autocomplete');

Route::resource('frontend','FrontendController');

Route::get('/register','RegisterController@register')->name('register');

Route::post('/registerUser','RegisterController@registerUser')->name('registerUser');


Route::get('/login','LoginController@login');

Route::post('/loginPage','LoginController@loginPage')->name('loginPage');



