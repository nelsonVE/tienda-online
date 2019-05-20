<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Producto;
use App\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index($codigo = null)
    {
        $compras = Compra::all();
        $productos = Producto::all();
        $usuarios = Usuario::all();

        return view('admin.compra.index', [
            'usuarios' => $usuarios,
            'productos' => $productos,
            'compras' => $compras,
            'codigo' => $codigo
        ]);
    }

    public function create()
    {
        $compras = Compra::all();
        $productos = Producto::all();
        $usuarios = Usuario::all();

        return view('admin.compra.agregar', [
            'usuarios' => $usuarios,
            'productos' => $productos
        ]);
    }

    public function getTotal(Request $request)
    {
        $producto = Producto::find($request->producto);
        $cantidad = $request->cantidad;

        return response()->json(['success'=> ($producto->precio * $cantidad)]);
    }

    public function store(Request $request)
    {
        $validarDatos = $request->validate([
            'usuario' => 'required',
            'producto' => 'required',
            'cantidad' => 'required|numeric',
        ]);

        $producto = Producto::find($request->producto);
        
        $date = Carbon::now();
        
        //dd($request->usuario);
        $compra = new Compra();
        $compra->fk_usuario = $request->usuario;
        $compra->fk_producto = $request->producto;
        $compra->cantidad = $request->cantidad;
        $compra->total = ($request->cantidad * $producto->precio);
        $compra->fecha_compra = $date->toDateString();

        $compra->save();

        return redirect('/admin/compras/202');
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
