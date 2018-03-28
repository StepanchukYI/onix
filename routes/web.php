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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contacts', 'HomeController@contacts')->name('home');

Route::get('/about', 'HomeController@about')->name('home');

Route::get('/projects', 'HomeController@projects')->name('home');



Route::get('/object/{object}', 'CategoryController@object')->name('home');


Route::get('/{category?}', 'CategoryController@index')->name('home');




Route::post('/callback', 'EmailNotification@callback')->name('home');
Route::post('/project', 'EmailNotification@projects')->name('home');
