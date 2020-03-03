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
    //return view('welcome');
    //return "hola que tal";
    $a = 10;
    echo "ei!!".$a;
});

Route::get('/productes','productsController@llistat');
Route::get('/productes/afegir','productsController@formAdd');
Route::post('productes/guardar','productsController@add');
Route::get('productes/esborrar/{id}','productsController@delete')
->where('id', '[0-9]+');


Route::get('/productes/actualitzar/{id}','productsController@formEdit')
->where('id', '[0-9]+');

Route::post('/productes/actualitzar/{id}','productsController@edit');


Route::get('/hola/{usuari}', 'provaController@saluda');

Route::get('/adeu/plou', 'provaController@hola');

Route::get('/prova/{codi?}','provaController@producte')
  ->where('codi', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
