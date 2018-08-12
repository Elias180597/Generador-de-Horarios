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

Route::get('getMaterias/{idCarrera}/{idCuatri}',function($idCarrera,$idCuatri){
    $materias = DB::table('materias')
    ->where('id_carrera','=',$idCarrera)
    ->where('cuatrimestre','=',$idCuatri)
    ->get();
    return $materias;
});

Route::get('getMateriasbyCuatri/{idCuatri}',function($idCuatri){
    $idCarrera = \Auth::user()->carrera;
    $materias = DB::table('materias')
    ->where('id_carrera','=',$idCarrera)
    ->where('cuatrimestre','=',$idCuatri)
    ->get();
    return $materias;
});

Route::get('getCarreras', function() {
    return $carreras = DB::table('carreras')->get();
});

Route::get('/horario/imprimir/{id}', 'HorariosController@imprimir');


Route::post('contact', 'HorariosController@store')->name('contact.store');


Route::get('/horario/index', 'HorariosController@index')->name('/horario/index');

Route::get('/logout',function(){
    Auth::logout();
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/horario/lista', 'HorariosController@verHorarios')->name('/horario/lista');
Route::get('/getMateriasby','HorariosController@getCurrentMaterias')->name('getMateriasby');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
