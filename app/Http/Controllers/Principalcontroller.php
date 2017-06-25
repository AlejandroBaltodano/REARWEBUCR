<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class Principalcontroller extends Controller
{

    /*este controlador solo existe para redeccionar las vistas segun los roles del  usuario*/
    public function index(){
        $user = Auth::user();
  

    	if ($user->IdRolusuario === 1) {

    		$usuarios= User::all();
     
    return view('Administrador\listaProfesores', compact('usuarios'));

    	}elseif ($user->IdRolusuario === 2) {
            $usuarios = User::where('IdRolusuario', '=', 3)->get();
            return view('Profesor/IndexProfesor', compact('usuarios'));

        }else{
            $UserEstudiante= Auth::user();
            $Archivos=$UserEstudiante->Archivos;

            return view('Estudiante/IndexEstudiante', compact('Archivos'));

        }


        

    	
    }
}
