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
 //otra forma de agregar cuando necesito manipular los datos
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

 public function editProfesor($idProfesor){
    $profesor= User::find($idProfesor);

   return view('Profesor\edit', compact('profesor'));

}
public function updateProfesor(Request $requests, $idProfesor){

$profesor = User::find($idProfesor);

          $profesor->name = $requests['name'];
             $profesor->email = $requests['email'];
             $profesor->IdRolusuario = $requests['IdRolusuario'];
             $profesor->carnetEstudiante= $requests['carnetEstudiante'];
             $profesor->cedula = $requests['cedula'];
             $profesor->save();

             return redirect('/administradores/listaprofesores');
    


}

public function editEstudiante($idEstudiante){


}
public function updateEstudiante(Request $requests, $idProfesor){


}

public  function destroyProfesor($idProfesor){
$profesor = User::find($idProfesor);
$profesor->delete();
return back();


}

public  function destroyEstudiante($idEstudiante){


}

public function verArchivosEstudiante($idEstudiante){

    $estudiante = User::find($idEstudiante);
    $archivos= $estudiante->Archivos;


}



}
   

    

