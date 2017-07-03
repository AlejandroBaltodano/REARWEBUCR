<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Estudiantecontroller extends Controller
{
    //


public function editEstudiante($idEstud){
    $estud= User::find($idEstud);

   return view('Estudiante\edit', compact('estud'));

}


public function updateEstud(Request $requests, $idEstud){

$estud = User::find($idEstud);
$contraseñaActual= $requests->get('passwordActual');
$contraseñaBD= $estud->password;
$contraseña= $requests->get('password');
$confirmarContraseña= $requests->get('password_confirmation');

if (\Hash::check($contraseñaActual, $contraseñaBD))
{
    if ($contraseña === $confirmarContraseña) {

             $estud->name = $requests['name'];
             $estud->email = $requests['email'];
             $estud->IdRolusuario = $requests['IdRolusuario'];
             $estud->carnetEstudiante= $requests['carnetEstudiante'];
             $estud->cedula = $requests['cedula'];
             $estud->password = bcrypt($contraseña);
             $estud->save();
         
           return redirect('/estudiantes/index');


    }else{


        session()->flash("message", "Los campos Contraseña y Confirmar Contraseña deben de coincidir");
         return back();
    }

}else{


        session()->flash("message", "Contraseña Actual Incorrecta");
        return back();
    }



}
}