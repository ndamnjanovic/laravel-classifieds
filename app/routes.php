<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/oglasi-sabac/kontakt', 'HomeController@showContactForm');
Route::post('/oglasi-sabac/posalji-komentar', 'HomeController@sendComment');
Route::get('/oglasi-sabac-kat/{categorySlug}', 'ClassifiedsController@getByCategory');
Route::get('/oglasi-sabac/objavi', 'ClassifiedsController@create');
Route::get('/oglasi-sabac/{id}', 'ClassifiedsController@show');
Route::post('/oglasi-sabac/', 'ClassifiedsController@store');