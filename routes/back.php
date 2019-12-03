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

Route::get('/home', function () {
    return view('backpages.back');
});


Route::get('/back/insectes', 'InsecteController@index')->name('insectes');
Route::get('/back/insectes/show/{id}', 'InsecteController@show')->name('insecte.show');
Route::get('/back/insectes/edit/{id}', 'InsecteController@edit')->name('insecte.edit');
Route::get('/back/insectes/create', 'InsecteController@create')->name('insecte.create');
Route::put('/back/insectes/update/{id}', 'InsecteController@update')->name('insecte.update');
Route::post('/back/insectes/store/', 'InsecteController@store')->name('insecte.store');
Route::delete('/back/insectes/{id}/destroy', 'InsecteController@destroy')->name('insecte.destroy');

Route::get('/back/recettes', 'RecetteController@index')->name('recettes');
Route::get('/back/recettes/show/{id}', 'recetteController@show')->name('recette.show');
Route::get('/back/recettes/edit/{id}', 'recetteController@edit')->name('recette.edit');
Route::get('/back/recettes/create', 'recetteController@create')->name('recette.create');
Route::put('/back/recettes/update/{id}', 'recetteController@update')->name('recette.update');
Route::post('/back/recettes/store/', 'recetteController@store')->name('recette.store');
Route::delete('/back/recettes/{id}/destroy', 'recetteController@destroy')->name('recette.destroy');

Route::get('/back/ingredients', 'ingredientController@index')->name('ingredients');
Route::get('/back/ingredients/show/{id}', 'ingredientController@show')->name('ingredient.show');
Route::get('/back/ingredients/edit/{id}', 'ingredientController@edit')->name('ingredient.edit');
Route::get('/back/ingredients/create', 'ingredientController@create')->name('ingredient.create');
Route::put('/back/ingredients/update/{id}', 'ingredientController@update')->name('ingredient.update');
Route::post('/back/ingredients/store/', 'ingredientController@store')->name('ingredient.store');
Route::delete('/back/ingredients/{id}/destroy', 'ingredientController@destroy')->name('ingredient.destroy');
