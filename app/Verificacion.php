<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verificacion extends Model
{
    protected $table = 'verificacion';
    
    protected $fillable = [
        'fk_usuario', 'activo'
    ];

    protected $hidden = [
        'key'
    ];

}
