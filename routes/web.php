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
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/registration', function(){
    return view('pages.registration');
})->name('registration');

Route::post('/verification', 'UserController@verify') ->name('verify');

Route::post('/dashboard', 'UserController@verify') ->name('todash');

Route::post('/registration', 'UserController@store') ->name('youpi');

Route::get('/deconnexion', 'UserController@deconnexion') ->name('disconnect');

Route::post('/back', 'BackController@index')->name('back');

Route::get('/apropos', function () {
    return view('pages.apropos');
});
Route::get('/insectes', function () {
    return view('pages.insectes');
});

Route::get('/actus', 'frontActuController@index')->name('actus');

Route::get('/recettes', 'frontRecetteController@index')->name('recettes');

Route::get('/recettes/show/{id}', 'frontRecetteController@show')->name('recette');

// Route::get('/actus', function () {
//     return view('pages.actus');
// });

Route::get('/FAQ', function () {
    return view('pages.FAQ');
});
Route::get('/partenaires', function () {
    return view('pages.partenaires');
});
Route::get('/mentions', function () {
    return view('pages.mentions');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/membre', function () {
    return view('membres.dashboard');
})->name('dashboard');

Route::get('/comment', function () {
    return view('membres.comment');
});
Route::get('/favoris', function () {
    return view('membres.favoris');
});
Route::get('/postrecette', function () {
    return view('membres.postrecette');
});


//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//remplacera la première route qd homeController sera fonctionnel
