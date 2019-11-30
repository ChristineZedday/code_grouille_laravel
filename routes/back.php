<?php

/*
|--------------------------------------------------------------------------
|Routes pour le Back Office du site
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/back/insectes', 'InsecteController@index')->name('insectes');
Route::get('/back/insectes/show/{id}', 'InsecteController@show')->name('insecte.show');
Route::get('/back/insectes/edit/{id}', 'InsecteController@edit')->name('insecte.edit');
Route::get('/back/insectes/create', 'InsecteController@create')->name('insecte.create');
Route::put('/back/insectes/update/{id}', 'InsecteController@update')->name('insecte.update');
Route::post('/back/insectes/store/{id}', 'InsecteController@store')->name('insecte.store');