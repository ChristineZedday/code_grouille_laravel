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

Route::get('/back', function () {
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
Route::get('/back/recettes/show/{id}', 'RecetteController@show')->name('recette.show');
Route::get('/back/recettes/edit/{id}', 'RecetteController@edit')->name('recette.edit');
Route::get('/back/recettes/create', 'RecetteController@create')->name('recette.create');
Route::put('/back/recettes/update/{id}', 'RecetteController@update')->name('recette.update');
Route::post('/back/recettes/store/', 'RecetteController@store')->name('recette.store');
Route::delete('/back/recettes/{id}/destroy', 'RecetteController@destroy')->name('recette.destroy');

Route::get('/back/ingredients', 'IngredientController@index')->name('ingredients');
Route::get('/back/ingredients/show/{id}', 'IngredientController@show')->name('ingredient.show');
Route::get('/back/ingredients/edit/{id}', 'IngredientController@edit')->name('ingredient.edit');
Route::get('/back/ingredients/create', 'IngredientController@create')->name('ingredient.create');
Route::put('/back/ingredients/update/{id}', 'IngredientController@update')->name('ingredient.update');
Route::post('/back/ingredients/store/', 'IngredientController@store')->name('ingredient.store');
Route::delete('/back/ingredients/{id}/destroy', 'IngredientController@destroy')->name('ingredient.destroy');

Route::get('/back/actus', 'ActuController@index')->name('actus');
Route::get('/back/actus/show/{id}', 'ActuController@show')->name('actu.show');
Route::get('/back/actus/edit/{id}', 'ActuController@edit')->name('actu.edit');
Route::get('/back/actus/create', 'ActuController@create')->name('actu.create');
Route::put('/back/actus/update/{id}', 'ActuController@update')->name('actu.update');
Route::post('/back/actus/store/', 'ActuController@store')->name('actu.store');
Route::delete('/back/actus/{id}/destroy', 'ActuController@destroy')->name('actu.destroy');

Route::get('/back/membres', 'MembreController@index')->name('membres');
Route::get('/back/membres/show/{id}', 'MembreController@show')->name('membre.show');
Route::get('/back/membres/edit/{id}', 'MembreController@edit')->name('membre.edit');
Route::get('/back/membres/create', 'MembreController@create')->name('membre.create');
Route::put('/back/membres/update/{id}', 'MembreController@update')->name('membre.update');
Route::post('/back/membres/store/', 'MembreController@store')->name('membre.store');
Route::delete('/back/membres/{id}/destroy', 'MembreController@destroy')->name('membre.destroy');

Route::get('/back/mentions', 'MentionController@index')->name('mentions');
Route::get('/back/mentions/edit/{id}', 'MentionController@edit')->name('mention.edit');
Route::post('/back/mentions/update/{id}', 'MentionController@update')->name('mention.update');

Route::get('/back/commentaires', 'CommentaireController@index')->name('commentaires');
Route::get('/back/commentaires/edit/{id}', 'CommentaireController@edit')->name('commentaire.edit');
Route::post('/back/commentaires/update/{id}', 'CommentaireController@update')->name('commentaire.update');
Route::post('/back/commentaires/{id}/destroy', 'CommentaireController@destroy')->name('commentaire.destroy');
