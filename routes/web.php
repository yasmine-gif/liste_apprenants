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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/apprenants', 'ApprenantsController@index')->name('apprenants.liste');
Route::get('/apprenants/formulaire', 'ApprenantsController@create')->name('apprenant.enregistrer');
Route::post('/apprenants/enregistrer', 'ApprenantsController@store')->name('apprenant.valider');

Route::get('/apprenants/details/{id}', 'ApprenantsController@show')->name('apprenants.details');
Route::get('/apprenants/modifier/{id}', 'ApprenantsController@modifier')->name('apprenant.modifier');
Route::put('/apprenants/modifier/{id}', 'ApprenantsController@update')->name('apprenant.update');
Route::delete('/apprenants/supprimer/{id}', 'ApprenantsController@destroy')->name('apprenant.delete');

Route::get('/tuteurs', 'TuteursController@index')->name('tuteur.liste');
Route::get('/tuteurs/formulaire', 'TuteursController@create')->name('tuteur.enregistrer');
Route::post('/tuteurs/enregitrer', 'TuteursController@store')->name('tuteur.valider');

Route::get('/contacts', 'ContactController@index')->name('contact');
