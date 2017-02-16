<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

///crear las rutas para el Noticias
Route::resource('/noticias','Noticias');//con el metodo resource convertimos todas del controlador
//y tienes dos parametros 1.-rutas que se define "noticias" 2.-controlador"Noticias"
