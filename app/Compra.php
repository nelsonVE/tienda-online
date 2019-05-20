<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'usu_pro';

    protected $fillable = [
        'fecha_compra', 'cantidad', 'total'
    ];

    protected $guarded = [
        'fk_usuario', 'fk_producto'
    ];
}
