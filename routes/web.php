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
    return view('layouts.default');
})->name('login');

Route::get('/registration', function(){
    return view('pages.registration');
})->name('registration');

Route::post('/verification', 'UserController@verify') ->name('verify');

Route::post('/registration', 'UserController@store') ->name('youpi');

Route::post('/back', 'BackController@index')->name('back');

Route::get('/apropos', function () {
    return view('pages.apropos');
});
Route::get('/insectes', function () {
    return view('pages.insectes');
});
Route::get('/recettes', function () {
    return view('pages.recettes');
});

Route::get('/actus', 'ShowActus@index')->name('actus');

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
