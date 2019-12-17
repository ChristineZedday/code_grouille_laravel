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
Route::get('/', 'HomeController@index')->name('home');

// Route::get('/home', function () {
//     return view('pages.home', 'HomeController@lastactu');
// });

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/registration', function(){
    return view('pages.registration');
})->name('registration');

Route::post('/verification', 'UserController@verify')->name('verify');

Route::post('/dashboard', 'UserController@verify') ->name('todash');

Route::post('/registration', 'UserController@store') ->name('youpi');

Route::get('/deconnexion', 'UserController@deconnexion') ->name('disconnect');

Route::post('/back', 'BackController@index')->name('back');

Route::post('/membres/recettes/post', 'frontRecetteController@store')->name('recette.post');

Route::get('/membres/recette/form', 'frontRecetteController@create')->name('recette.form');




// Route::get('/insectes', function () {
//     return view('pages.insectes')->name('insectes');
// });

Route::get('/actus', 'frontActuController@index')->name('actus');

Route::get('/actus/show/{id}', 'frontActuController@show')->name('actu.show');

Route::get('/insectes', 'frontInsecteController@index')->name('insectes');

Route::get('/insectes/show/{id}', 'frontInsecteController@show')->name('insecte.show');

Route::get('/recettes', 'frontRecetteController@index')->name('recettes');

Route::get('/recettes/show/{id}', 'frontRecetteController@show')->name('recette.show');

Route::get('/mentions', 'frontInfoController@showmentions')->name('mentions');

Route::get('/apropos', 'frontInfoController@showapropospara1')->name('apropos');

Route::get('/favoris', 'RecetteUserController@index')->name('bookmarks');
Route::get('/favoris/add/{id}', 'RecetteUserController@add')->name('add-bookmarks');
Route::get('/favoris/remove/{id}', 'RecetteUserController@remove')->name('remove-bookmarks');

// Route::get('/favoris', function () {
//     return view('pages.favoris');
// })->name('favoris');

// Route::get('/recettes', 'RecetteController@add_bookmark')->name('addbookmark');

// Route::get('/favoris/show/{id}', 'RecetteUserController@show')->name('bookmark.show');

// Route::get('/FAQ', function () {
//     return view('pages.FAQ');
// });
// Route::get('/partenaires', function () {
//     return view('pages.partenaires');
// });

Route::get('/contact', 'ContactController@create')->name('contact');

Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/confidentialite', 'frontinfoController@showpolitique')->name('confidentialite');

Route::get('/charte', function(){
    return view('pages.charteCGU');
})->name('charteCGU');



Route::post('/recette/commenter/ {id}', 'frontRecetteController@comment')->name('commenter');

Route::get('/membre', function () {
    return view('membres.dashboard');
})->name('dashboard');

Route::get('/comment', 'frontCommentController@index')->name('membres.comment');



//Auth::routes();

