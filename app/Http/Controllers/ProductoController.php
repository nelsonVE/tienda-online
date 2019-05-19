<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.producto.crear');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:12',
            'precio' => 'required|numeric'
        ]);

        $error_precio = \Illuminate\Validation\ValidationException::withMessages([
            'precio' => ['El precio del producto no puede ser negativo o cero']
        ]);

        if($request->precio <= 0)
            throw $error_precio;
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->save();

        return redirect('/admin/productos/203');
    }

    public function show(Producto $producto)
    {
        //
    }

    public function showall($codigo = null)
    {
        $productos = Producto::all();
        return view('admin.producto.ver', [
            'productos' => $productos,
            'codigo' => $codigo
        ]);
    }

    public function edit($producto)
    {
        $producto_get = Producto::find($producto);

        if(!$producto_get)
            return redirect('/admin/productos');
        
        return view('admin.producto.editar', [
            'producto' => $producto_get
        ]);
    }

    public function update(Request $request)
    {
        $validation = $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:12',
            'precio' => 'required|numeric'
        ]);

        $error_precio = \Illuminate\Validation\ValidationException::withMessages([
            'precio' => ['El precio del producto no puede ser negativo o cero']
        ]);

        $error_id = \Illuminate\Validation\ValidationException::withMessages([
            'id' => ['Ha ocurrido un error del sistema. Contacte a un administrador.']
        ]);

        if($request->precio <= 0)
            throw $error_precio;

        $producto = Producto::find($request->id);
        if(!$producto)
            throw $error_id;

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->save();

        return redirect('/admin/productos/202');
    }

    public function destroy(Producto $producto)
    {
        //
    }
}
