<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EstudiantesController extends Controller
{
    public function GuardarArchivo(Request $requests){

        if($requests->hasFile('ubicacionArchivo')){
        $ArchivoNuevo= new Archivo();
        $ArchivoNuevo->Id=$requests->input('Id');
        $ArchivoNuevo->carnetEstudiante=Auth::user()->carnetEstudiante;
        $ArchivoNuevo->Descripcion=$requests->input('Descripcion');
        $ArchivoNuevo->NombreDelArchivo=$requests->input('NombreDelArchivo');

        $archivoSubido=$requests->file('ubicacionArchivo');

        $rutaArchivo=Auth::user()->carnetEstudiante.'_'.$archivoSubido->getClientOriginalName();
        Storage::disk('ArchivosREARWEBUCR')->put($rutaArchivo,file_get_contents($archivoSubido->getRealPath()) );
            $ArchivoNuevo->UrlArchivo=$rutaArchivo;

            if( $ArchivoNuevo->save()) {


            return redirect('/');
        }
    }}
}
