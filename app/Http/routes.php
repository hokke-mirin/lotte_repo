<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'PagesController@index');
Route::get('/Confirm', 'PagesController@Confirm');
//Route::get('/insert','PagesController@insert');
//Route::get('/update','PagesController@update');
//Route::get('/delete','PagesController@delete');
//Route::get('contact', 'PagesController@contact');
