<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Principalcontroller extends Controller
{

    /*este controlador solo existe para redeccionar las vistas segun los roles del  usuario*/
    public function index(){

    	$user = Auth::user();

    	if ($user->IdRolusuario === 1) {
    		
    		return view('layouts\masterAdministradores', compact('user'));

    	}elseif ($user->IdRolusuario === 2) {

    		return view('layouts\masterProfesores', compact('user'));

    	}else{

    		return view('layouts\masterEstudiantes', compact('user'));
    	}


        

    	
    }
}
