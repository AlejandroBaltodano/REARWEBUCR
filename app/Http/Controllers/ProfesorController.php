<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Archivo;
use Illuminate\Support\Facades\Auth;

class ProfesorController extends Controller
{
    public function ListarArchivosEstudiante($id,Request $requests){
        $UserEstudiante= User::find($id);
        $Archivos=$UserEstudiante->Archivos;

        if(is_null($requests->get('txtBuscar'))){
            $txtBuscarValor='';
            return view('Profesor/ListarArchivosEstudiante', compact('Archivos', 'txtBuscarValor', 'UserEstudiante'));
        }else{$ArchivosFiltrar= $requests->get('txtBuscar');
            $Archivos = Archivo::where('NombreDelArchivo','like','%'.$ArchivosFiltrar.'%','and','user_id','=',$id)->get();

            $txtBuscarValor=$requests->get('txtBuscar');
            return view('Profesor/ListarArchivosEstudiante', compact('Archivos', 'txtBuscarValor','UserEstudiante'));
        }}

    public function Index(Request $requests){
        $usuarios = User::where('IdRolusuario', '=', 3)->get();
        if(is_null($requests->get('txtBuscar'))){
            $txtBuscarValor='';

            return view('Profesor/IndexProfesor', compact('usuarios', 'txtBuscarValor'));
        }else{$EstudianteFiltrar= $requests->get('txtBuscar');
            $usuarios = User::where('name','like','%'.$EstudianteFiltrar.'%','and','IdRolusuario','=',3)->get();
            $txtBuscarValor=$requests->get('txtBuscar');
            return view('Profesor/IndexProfesor', compact('usuarios', 'txtBuscarValor'));
        }
    }

    public function editarProfesor(){
        $profesor= Auth::user();

        return view('Profesor\EditarPerfilProfesor', compact('profesor'));

    }
    public function updateProfesor(Request $requests){

        $profesor= Auth::user();
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

                return redirect('/Profesor/index');
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
