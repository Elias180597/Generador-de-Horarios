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
    return view('welcome');
});

Route::get('/horario/imprimir', function () {
    return view('/horario/imprimir');
});

/*Route::get('/horario/index', function () {
    return view('/horario/index');
});*/
//Route::post('agregarHorario', 'HorariosController@store')->('agregarHorario.store');
Route::post('contact', 'HorariosController@store')->name('contact.store');


Route::get('/horario/index', 'HorariosController@index')->name('/horario/index');

/*Route::get('/horario/lista', function () {
    return view('/horario/lista');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/horario/lista', 'HorariosController@verHorarios')->name('/horario/lista');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
