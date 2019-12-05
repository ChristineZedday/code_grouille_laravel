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

Route::get('/registration', function(){
    return view('pages.registration');
});

Route::post('/verification', function(){
return view('pages.verification')->name('verify');
});

Route::get('/apropos', function () {
    return view('pages.apropos');
});
Route::get('/insectes', function () {
    return view('pages.insectes');
});
Route::get('/recettes', function () {
    return view('pages.recettes');
});
Route::get('/actus', function () {
    return view('pages.actus');
});
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//remplacera la première route qd homeController sera fonctionnel
