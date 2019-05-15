<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $usuario = Usuario::find($request->session()->get('user_id'));
        
        if(!$usuario)
            return view('home.index', [
                "logged" => false
            ]);
        
        else
            return view('home.index', [
                "logged" => true,
                "usuario" => $usuario
            ]);
        
    }

    public function ingresar()
    {
        return view('home.ingresar');
    }

    public function salir(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
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
            'password_confirmation' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
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

        return redirect('/ingresar');
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

        $error_password = \Illuminate\Validation\ValidationException::withMessages([
            'password' => ['La contraseña es incorrecta']
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if(!$usuario)
            throw $error_email;

        if(!Hash::check($request->password, $usuario->pass))
            throw $error_password;
        

        $request->session()->put('user_id', $usuario->id);
        
        return redirect('/');
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
