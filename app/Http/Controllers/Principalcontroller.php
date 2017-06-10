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

    		return view('layouts\masterAdministradores');

    	}elseif ($user->IdRolusuario === 2) {

    		return view('layouts\masterProfesores');

    	}else{

    		return view('layouts\masterEstudiantes');
    	}


        

    	
    }
}
