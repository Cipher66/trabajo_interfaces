<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto_Dato extends Model
{
    //
	protected $table = 'registro';

	protected $fillable = ['nombre', 'apellido', 'direccion', 'email'];
}
