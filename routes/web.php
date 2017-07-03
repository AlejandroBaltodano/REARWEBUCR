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
Route::get('/administradores/{idProfesor}/profesor', 'Administradorcontroller@destroyProfesor');
//rutas para mantenimiento administrador
Route::get('/administradores/{idAdmin}/editaradministrador', 'Administradorcontroller@editAdministrador');
Route::put('/administradores/{idAdmin}/admin', 'Administradorcontroller@updateAdmin');

//rutas para mantenimiento estudiantes -> a cargo del administrador
Route::get('/administradores/{idEstudiante}/verlistaArchivosEstudiante', 'Administradorcontroller@verArchivosEstudiante');
Route::get('/administradores/{idArchivo}/archivo', 'Administradorcontroller@EliminarArchivo');
Route::get('/administradores/{idEstudiante}/eliminarestudiante', 'Administradorcontroller@destroyEstudiante');
Route::resource('administradores','Administradorcontroller');

//rutas para buscar-> a cargo del administrador
//Route::get('/administradores/buscarprofesor','Administradorcontroller@buscarProfesor');

//fin rutas administradores


Route::post('/estudiantes/guardarArchivo','ArchivoController@GuardarArchivo');
Route::get('/estudiantes/index','ArchivoController@MostrarArchivosEstudiante');


    Route::get('/estudiantes/index/{nombreArchivo}','ArchivoController@DescargarArchivos');
    Route::get('estudiantes/Archivos/subirArchivo','ArchivoController@IrAsubirArchivo');
    Route::get("/estudiante/Archivo/editar/{id}",'ArchivoController@editarArchivo');
    Route::post('/estudiante/Archivo/actualizar/{id}','ArchivoController@Actualizar');
    Route::get('/estudiantes/Archivos/eliminar/{id}','ArchivoController@Eliminar');

    Route::get('/Profesor/ArchivosEstudiante/{id}',"ProfesorController@ListarArchivosEstudiante");
    Route::get('/Profesor/index','ProfesorController@Index');
});

Auth::routes();


