<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
    	'nombre', 'apellido', 'email', 'referencia', 'codigo'
    ];

    protected $hidden = [
    	'pass'
    ];
}
