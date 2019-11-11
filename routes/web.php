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

/*Route::get('/', function () {
    return view('contact');
});*/

Route::get('/', 'ContactsController@index');

Route::post('/', 'ContactsController@store');

Route::get('/search', 'ContactsController@search');

Route::get('/create', 'ContactsController@create');

Route::get('/edit/{contact}', 'ContactsController@edit');

Route::patch('/edit/{contact}', 'ContactsController@update');

Route::get('/delete/{contact}', 'ContactsController@delete');

Route::delete('/delete/{contact}', 'ContactsController@destroy');