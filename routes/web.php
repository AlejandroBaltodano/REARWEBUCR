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
Route::get('/administradores/listaprofesores', 'Administradorcontroller@listaProfesores');
Route::get('/administradores/listaestudiantes', 'Administradorcontroller@listaEstudiantes');
//rutas para mantenimiento profesores -> a cargo del administrador
Route::get('/administradores/{idProfesor}/editarprofesores', 'Administradorcontroller@editProfesor');
Route::put('/administradores/{idProfesor}', 'Administradorcontroller@updateProfesor');
Route::delete('/administradores/{idProfesor}', 'Administradorcontroller@destroyProfesor');
//rutas para mantenimiento estudiantes -> a cargo del administrador
Route::get('/administradores/{idEstudiante}/editarestudiantes', 'Administradorcontroller@editEstudiante');
Route::put('/administradores/{idEstudiante}', 'Administradorcontroller@updateEstudiante');
Route::delete('/administradores/{idEstudiante}', 'Administradorcontroller@destroyEstudiante');


Route::resource('administradores','Administradorcontroller');



Route::post('/estudiantes/guardarArchivo','EstudiantesController@GuardarArchivo');
Route::get('/estudiantes/index','EstudiantesController@MostrarArchivosEstudiante');


    Route::get('/estudiantes/index/{nombreArchivo}','EstudiantesController@DescargarArchivos');
    Route::get('estudiantes/Archivos/subirArchivo','EstudiantesController@IrAsubirArchivo');

});

Auth::routes();


