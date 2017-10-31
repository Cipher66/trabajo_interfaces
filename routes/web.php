<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
      return view('index');
});
Route::get('/registrarse', function (){
      return view('contact');
});
Route::get('/Datos_de_registro', function (){
      return view('verDatos');
});
Route::post('/Datos_de_registro', function(){
      $nombre=request()->get('Nombre');
      $apellido=request()->get('Apellido');
      $direccion=request()->get('Direccion');
      $email=request()->get('Email');

      return($nombre.$apellido.$direccion.$email);
});
Route::post('/Datos_de_registro','proyecto_DatoController@datosRegistro');
