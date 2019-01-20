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
    return redirect('/contacts');
});

Route::resource('/contacts', 'ContactController')->except('destroy');
Route::get('/contactsList', 'ContactController@ajaxContactList');
Route::get('/contacts/{id}/delete', 'ContactController@destroy');
Route::get('/contacts/{id}/export','ContactController@export_pdf');

