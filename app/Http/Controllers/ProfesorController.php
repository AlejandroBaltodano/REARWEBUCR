<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function ListarArchivosEstudiante($id){
        $UserEstudiante= User::find($id);

        return view('Profesor/ListarArchivosEstudiante', compact('UserEstudiante'));



    }
}
