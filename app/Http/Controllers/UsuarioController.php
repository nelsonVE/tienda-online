<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('home.ingresar');
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

        $error_email = \Illuminate\Validation\ValidationException::withMessages([
            'email' => ['El email ya se encuentra registrado']
        ]);

        if($encontro = Usuario::where('email', $request->email)->first())
            throw $error_email;

        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->pass = Hash::make($request->password);

        $usuario->save();

        return 'Usuario creado';
    }

    public function login(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $error_email = \Illuminate\Validation\ValidationException::withMessages([
            'email' => ['El email ingresado no se encuentra registrado']
        ]);

        $encontro = Usuario::where('email', $request->email)->first();

        if(!$encontro)
            throw $error_email;

        if(Hash::check($request->password, $encontro->pass)){
            return "Pass coincide";
        }

        return "Pass no coincide";
    }

    public function show(Usuario $usuario)
    {
        echo 'Email: '.$usuario->email.' - .';
        return 'OK';
    }

    public function edit(Usuario $usuario)
    {
        //
    }

    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    public function destroy(Usuario $usuario)
    {
        //
    }
}
