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
    return view('pages/index');
});

Route::get('domaines', function () {
    return view('pages/domaines');
});

Route::get('/assur', function () {
    return view('pages/assureur');
});


Route::get('/form_contrat', function () {
    return view('pages/form_contrat');
});

Route::get('/dashboard/{id}',[
   'as'=>'dashboard',
   'uses'=>'liiarController@dashboard'
]);

Route::resource('formulaire', 'FormulaireController');
Route::resource('test', 'TestController');
Route::resource('devis', 'TestController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

