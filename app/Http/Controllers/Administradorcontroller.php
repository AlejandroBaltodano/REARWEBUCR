<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Administradorcontroller extends Controller
{

	
    public function listaProfesores(){
    	$usuarios= User::all();
    return view('Administrador\listaProfesores', compact('usuarios'));
    		
    	}

    public function listaEstudiantes(){
    	$usuarios= User::all();
    return view('Administrador\listaEstudiantes', compact('usuarios'));
    		
    	}
public function create(){
	return view('Administrador\registrarProfesor');

}

public function store(Request $requests){

 $profesor = User::create([
            'name' => $requests['name'],
            'email' => $requests['email'],
            'password' => bcrypt($requests['password']),
            'IdRolusuario' => $requests['IdRolusuario'],
            'carnetEstudiante'=> $requests['carnetEstudiante'],
            'cedula'  => $requests['cedula']
        ]);

  return redirect('administradores/listaprofesores');
}



}
   

    

