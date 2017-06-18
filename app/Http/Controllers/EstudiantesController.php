<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EstudiantesController extends Controller
{
    public function GuardarArchivo(Request $requests){

        if($requests->hasFile('ubicacionArchivo')) {
            $archivoSubido=$requests->file('ubicacionArchivo');
            $NombreCorto = explode(".", $archivoSubido->getClientOriginalName());
            $extension = end($NombreCorto);
            $ArchivoNuevo = new Archivo();
            $ArchivoNuevo->Id = $requests->input('Id');
            $ArchivoNuevo->user_id = Auth::user()->id;
            $ArchivoNuevo->Descripcion = $requests->input('Descripcion');
            if (is_null($requests->input('NombreDelArchivo'))){
                $ArchivoNuevo->NombreDelArchivo =  $archivoSubido->getClientOriginalName();

        }else {
                $ArchivoNuevo->NombreDelArchivo = $requests->input('NombreDelArchivo').".".$extension;
            }

            $rutaArchivo=Auth::user()->carnetEstudiante.'_'.$ArchivoNuevo->NombreDelArchivo;
        Storage::disk('ArchivosREARWEBUCR')->put($rutaArchivo,file_get_contents($archivoSubido->getRealPath()) );
            $ArchivoNuevo->UrlArchivo=$rutaArchivo;

            if( $ArchivoNuevo->save()) {


            return back();
        }
    }}

    public function MostrarArchivosEstudiante(){
        $UserEstudiante= Auth::user();

        return view('Estudiante/IndexEstudiante', compact('UserEstudiante'));
    }

    public function IrAsubirArchivo(){
        return view('Archivos/subirArchivo');
    }

    public function DescargarArchivos($nombreArchivo){

        $storage_path = storage_path();
        $url = $storage_path.'/ArchivosREARWEBUCR/'.$nombreArchivo;
        if(Storage::disk('ArchivosREARWEBUCR')->exists($nombreArchivo)){

            return response()->download($url);
        }else{
        abort(404);
        }
    }
}
