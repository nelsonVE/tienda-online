<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('home.registro');
    }

    public function store(Request $request)
    {
        $validarDatos = $request->validate([
            'nombre' => 'required|string|max:64',
            'apellido' => 'required|string|max:64',
            'email' => 'required|string|max:128',
            'password' => 'required_with:password_confirmation|string|confirmed',
            'password_confirmation' => 'required'
        ]);
        $usuario = Usuario::create($validarDatos);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
