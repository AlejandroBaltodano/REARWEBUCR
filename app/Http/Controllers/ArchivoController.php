<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
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
            $ArchivoNuevo->UrlArchivo=$rutaArchivo;
            $NombreDeArchivoGurdados=Archivo::all();
            foreach ($NombreDeArchivoGurdados as $archivo){
                if($archivo->NombreDelArchivo==$ArchivoNuevo->NombreDelArchivo){
                    $archivo= Archivo::find($archivo->id);
                    $archivo->delete();

                   //$this->GuardarArchivo($requests);

            }
            }
            Storage::disk('ArchivosREARWEBUCR')->put($rutaArchivo,file_get_contents($archivoSubido->getRealPath()) );
            if( $ArchivoNuevo->save()) {
            }

            return back();

        }}

    public function MostrarArchivosEstudiante(Request $requests){
        $UserEstudiante= Auth::user();
        $Archivos=$UserEstudiante->Archivos;
        if(is_null($requests->get('txtBuscar'))){
            return view('Estudiante/IndexEstudiante', compact('Archivos'));
        }else{$ArchivosFiltrar= $requests->get('txtBuscar');
            $Archivos = Archivo::where('NombreDelArchivo','like','%'.$ArchivosFiltrar.'%')->get();

            return view('Estudiante/IndexEstudiante', compact('Archivos'));
        }
        }

    public function IrAsubirArchivo(){
        $User= Auth::user();
        return view('Archivos/subirArchivo', compact('User'));
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

    public function editarArchivo($id){

        $archivo= Archivo::find($id);

        return view('/Archivos/EditarArchivo', compact('archivo'));

    }

    public function Actualizar(Request $requests, $id){


        if($requests->hasFile('ubicacionArchivo')) {
            $archivoSubido = $requests->file('ubicacionArchivo');
            $ArchivoNuevo = new Archivo();
            $archivo = Archivo::find($id);
            $NombreCorto = explode(".", $archivoSubido->getClientOriginalName());
            $extension = end($NombreCorto);
            $ArchivoNuevo->Id = $requests->input('Id');
            $ArchivoNuevo->user_id = Auth::user()->id;
            $ArchivoNuevo->Descripcion = $requests->input('Descripcion');

            if (is_null($requests->input('NombreDelArchivo'))) {
                $ArchivoNuevo->NombreDelArchivo = $archivoSubido->getClientOriginalName();

            } else {
                   $ArchivoNuevo->NombreDelArchivo = $requests->input('NombreDelArchivo') . "." . $extension;
                }
            }

            $rutaArchivo = Auth::user()->carnetEstudiante . '_' . $ArchivoNuevo->NombreDelArchivo;
            $ArchivoNuevo->UrlArchivo = $rutaArchivo;

            Storage::disk('ArchivosREARWEBUCR')->delete($archivo->UrlArchivo);
            $archivo->delete();

            Storage::disk('ArchivosREARWEBUCR')->put($rutaArchivo, file_get_contents($archivoSubido->getRealPath()));
            if ($ArchivoNuevo->save()) {
                return redirect('/estudiantes/index');

            }

            }
    public function Eliminar($id){

        $archivoEliminar= Archivo::find($id);
        Storage::disk('ArchivosREARWEBUCR')->delete($archivoEliminar->UrlArchivo);
        $archivoEliminar -> delete();
        return redirect('/estudiantes/index');

    }


}
