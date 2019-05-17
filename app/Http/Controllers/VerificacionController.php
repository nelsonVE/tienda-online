<?php

namespace App\Http\Controllers;

use App\Verificacion;
use App\Usuario;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VerificacionController extends Controller
{
    public function verificar($key)
    {
        $verificacion = Verificacion::where('key', $key)->first();

        if(!$verificacion || !$verificacion->activo)
            return redirect('/');
        
        $verificacion->activo = false;
        
        $usuario = Usuario::find($verificacion->fk_usuario);
        $usuario->email_verified_at = Carbon::now()->toDateTimeString();
        
        $usuario->save();
        $verificacion->save();

        return view('email.confirmado');
    }
}
