<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Archivo;

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
        }



    }
}
