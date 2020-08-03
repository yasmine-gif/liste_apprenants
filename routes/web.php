<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/1', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('acceuil');
});

Route::get('enregistrer', function () {
    return view('apprenants.enregistrer');
});

Route::get('liste', function () {
    return view('apprenants.liste');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('tuteur', function () {
    return view('tuteurs.tuteur');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/apprenants', 'ApprenantsController@index');
Route::get('/apprenants/enregistrer', 'ApprenantsController@create');
Route::post('/apprenants', 'ApprenantsController@store');
