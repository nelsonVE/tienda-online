<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Verificacion;
use App\RolUsuario;
use App\Mail\VerificacionEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function create($referencia = null)
    {
        $usuario = Usuario::where('codigo', $referencia)->first();

        if(!$usuario)
            $referencia = null;
        else
            $referencia = $usuario->id;
        
        return view('home.registro',[
            "referencia" => $referencia
        ]);
    }

    public function store(Request $request)
    {
        $validarDatos = $request->validate([
            'nombre' => 'required|string|max:64',
            'apellido' => 'required|string|max:64',
            'email' => 'required|string|max:128',
            'password' => 'required_with:password_confirmation|string|confirmed',
            'password_confirmation' => 'required',
        ]);

        $error_email = \Illuminate\Validation\ValidationException::withMessages([
            'email' => ['El email ya se encuentra registrado']
        ]);

        if($encontro = Usuario::where('email', $request->email)->first())
            throw $error_email;

        $usuario = new Usuario();
        $verificacion = new Verificacion();

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->pass = Hash::make($request->password);
        $usuario->rol = 1;
        $repetido = null;

        do{
            $usuario->codigo = bin2hex(random_bytes(4));
            $repetido = Usuario::where('codigo', $usuario->codigo)->first();
        } while($repetido);

        if($request->referencia)
            $usuario->referencia = $request->referencia;

        $usuario->save();

        $usuario = null;
        $usuario = Usuario::where('email', $request->email)->first();

        $verificacion->fk_usuario = $usuario->id;
        $verificacion->key = bin2hex(random_bytes(10));
        $verificacion->activo = true;

        $verificacion->save();

        $email = new \stdClass();
        $email->key = $verificacion->key;
        $email->username = $usuario->nombre;
        Mail::to($usuario->email)->send(new VerificacionEmail($email));

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

        $error_confirmacion = \Illuminate\Validation\ValidationException::withMessages([
            'email' => ['Necesitas confirmar tu dirección de correo electrónico']
        ]);

        $error_password = \Illuminate\Validation\ValidationException::withMessages([
            'password' => ['La contraseña es incorrecta']
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if(!$usuario)
            throw $error_email;

        if(!Hash::check($request->password, $usuario->pass))
            throw $error_password;

        if(!$usuario->email_verified_at)
            throw $error_confirmacion;
        

        $request->session()->put('user_id', $usuario->id);
        $request->session()->put('user_name', $usuario->nombre);
        $request->session()->put('user_type', $usuario->rol);

        return redirect('/');
    }

    public function perfil(Request $request)
    {
        $usuario = Usuario::find($request->session()->get('user_id'));
        return view('perfil.index', [
            "usuario" => $usuario
        ]);
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
