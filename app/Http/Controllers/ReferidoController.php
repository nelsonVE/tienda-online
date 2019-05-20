<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Compra;
use Illuminate\Http\Request;

class ReferidoController extends Controller
{
    public function index(Request $request)
    {
        $usuario = Usuario::find($request->session()->get('user_id'));
        $referidos = Usuario::where('referencia', $usuario->id)->get();
        $compras = Compra::all();
        //dd($referidos);
        return view('perfil.referidos', [
            "usuario" => $usuario,
            "referidos" => $referidos,
            "compras" => $compras
        ]);
    }
}
