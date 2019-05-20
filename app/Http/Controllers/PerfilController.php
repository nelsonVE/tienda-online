<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(Request $request)
    {
        $usuario = Usuario::find($request->session()->get('user_id'));
        $total_referidos = Usuario::where('referencia', $usuario->id)->count();
        $referidos_activos = Usuario::where('referencia', $usuario->id)->where('activo', true)->count();

        return view('perfil.index', [
            "usuario" => $usuario,
            "total_referidos" => $total_referidos,
            "referidos_activos" => $referidos_activos
        ]);
    }
}
