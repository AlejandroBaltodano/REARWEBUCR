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

Route::get('/', 'Principalcontroller@index');
      
 });



Auth::routes();


