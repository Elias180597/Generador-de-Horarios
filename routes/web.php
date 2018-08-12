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

Route::get('horario/pdf/view', function() {
    $html = view('horario.lista')->render();
     PDF::load($html)->show();
     return view('/horario/lista');
});
/*Route::get('/horario/imprimir', function () {
    return view('/horario/imprimir');
});*/
Route::get('/horario/imprimir/{id}', 'HorariosController@imprimir');

/*Route::get('/horario/index', function () {
    return view('/horario/index');
});*/
//Route::post('agregarHorario', 'HorariosController@store')->('agregarHorario.store');
Route::post('contact', 'HorariosController@store')->name('contact.store');


Route::get('/horario/index', 'HorariosController@index')->name('/horario/index');

Route::get('/logout',function(){
    Auth::logout();
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/horario/lista', 'HorariosController@verHorarios')->name('/horario/lista');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
