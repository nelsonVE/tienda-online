<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $fillable = [
        'nombre', 'descripcion', 'precio'
    ];
}
