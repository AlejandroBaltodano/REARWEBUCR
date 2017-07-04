<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Archivo;
use Illuminate\Support\Facades\Storage;

class Administradorcontroller extends Controller
{

	
    
    public function listaProfesores(Request $requests){

$nombreProfesor= $requests->get('txtBuscar');
    	$usuarios= User::nameprofesor($nombreProfesor,2)->orderBy('id','DESC')->paginate();
     
    return view('Administrador\listaProfesores', compact('usuarios'));
    		
    	}

    public function listaEstudiantes(Request $requests){
    	$nombreEstudiante= $requests->get('txtBuscar');
        $usuarios= User::nameestudiante($nombreEstudiante,3)->orderBy('id','DESC')->paginate();
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

public function editAdministrador($idAdmin){
    $admin= User::find($idAdmin);

   return view('Administrador\edit', compact('admin'));

}
public function updateAdmin(Request $requests, $idAdmin){

$admin = User::find($idAdmin);
$contraseñaActual= $requests->get('passwordActual');
$contraseñaBD= $admin->password;
$contraseña= $requests->get('password');
$confirmarContraseña= $requests->get('password_confirmation');

if (\Hash::check($contraseñaActual, $contraseñaBD))
{
    if ($contraseña === $confirmarContraseña) {

             $admin->name = $requests['name'];
             $admin->email = $requests['email'];
             $admin->IdRolusuario = $requests['IdRolusuario'];
             $admin->carnetEstudiante= $requests['carnetEstudiante'];
             $admin->cedula = $requests['cedula'];
             $admin->password = bcrypt($contraseña);
             $admin->save();

             return redirect('/administradores/listaprofesores');
    }else{


        session()->flash("message", "Los campos Contraseña y Confirmar Contraseña deben de coincidir");
         return back();
    }

}else{


        session()->flash("message", "Contraseña Actual Incorrecta");
        return back();
    }
      
    


}

 public function editProfesor($idProfesor){
    $profesor= User::find($idProfesor);

   return view('Administrador\editProfesor', compact('profesor'));

}
public function updateProfesor(Request $requests, $idProfesor){

$profesor = User::find($idProfesor);
$contraseñaActual= $requests->get('passwordActual');
$contraseñaBD= $profesor->password;
$contraseña= $requests->get('password');
$confirmarContraseña= $requests->get('password_confirmation');

if (\Hash::check($contraseñaActual, $contraseñaBD))
{
    if ($contraseña === $confirmarContraseña) {

             $profesor->name = $requests['name'];
             $profesor->email = $requests['email'];
             $profesor->IdRolusuario = $requests['IdRolusuario'];
             $profesor->carnetEstudiante= $requests['carnetEstudiante'];
             $profesor->cedula = $requests['cedula'];
             $profesor->password = bcrypt($contraseña);
             $profesor->save();

             return redirect('/administradores/listaprofesores');
    }else{


        session()->flash("message", "Los campos Contraseña y Confirmar Contraseña deben de coincidir");
         return back();
    }

}else{


        session()->flash("message", "Contraseña Actual Incorrecta");
        return back();
    }

}


public  function destroyProfesor($idProfesor){
$profesor = User::find($idProfesor);
$profesor->delete();
return back();


}

public  function destroyEstudiante($idEstudiante){

$estudiante = User::find($idEstudiante);
$estudiante->delete();
return back();

}

public function verArchivosEstudiante($idEstudiante){

    $estudiante = User::find($idEstudiante);

   return view('Administrador\listaArchivosEstudiante', compact('estudiante'));


}
    public function EliminarArchivo($idArchivo){

        $archivoEliminar= Archivo::find($idArchivo);
        Storage::disk('ArchivosREARWEBUCR')->delete($archivoEliminar->UrlArchivo);
        $archivoEliminar -> delete();
        return back();//redirect('/estudiantes/index');

    }







}
   

    

