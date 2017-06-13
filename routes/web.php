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



// aqui van las rutas para que se protejan y sean ingresadas despues de iniciar sesion
Route::group(['middleware' => 'auth'], function () {


//principal controller
Route::get('/', 'Principalcontroller@index');

//administradores
Route::get('administradores/listaprofesores', 'Administradorcontroller@listaProfesores');
Route::get('administradores/listaestudiantes', 'Administradorcontroller@listaEstudiantes');
Route::resource('administradores','Administradorcontroller');

Route::post('/','EstudiantesController@GuardarArchivo');
Route::get('/','EstudiantesController@MostrarArchivosEstudiante');

    Route::get('/{nombreArchivo}','EstudiantesController@DescargarArchivos');
    Route::get('Archivos/subirArchivo','EstudiantesController@IrAsubirArchivo');

});



Auth::routes();


