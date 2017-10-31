<?php

namespace App\Http\Controllers;

use App\proyecto_Dato;
use Illuminate\Http\Request;

class proyecto_DatoController extends Controller
{
    //
	public function datosRegistro(){

	    $this->validate(request(),
            [
                'Nombre'=>"required|string",
                'Apellido'=>"required|string",
                'Direccion'=>"required|string",
                'Email'=>"required|string|email"
            ]);

		$nombre=request()->get('Nombre');
		$apellido=request()->get('Apellido');
		$direccion=request()->get('Direccion');
		$email=request()->get('Email');

		$proyecto_Dato = new Proyecto_Dato();
		$proyecto_Dato->nombre=$nombre;
		$proyecto_Dato->apellido=$apellido;
		$proyecto_Dato->direccion=$direccion;
		$proyecto_Dato->email=$email;

		$proyecto_Dato->save();

		return(view('verDatos'));

		
	}
}
