<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    //
    public function principal()
    {
        $producto = Producto::paginate(5);
        return view('productos.principal', ['prod' => $producto]);
    }

    public function crear()
    {
        return view('productos.crear');
    }

    public function mostrar($variable)
    {
        $producto = Producto::find($variable);

        // return view('productos.mostrar', ['prod'=>$variable]);
        return view("productos.mostrar", compact('producto'));
    }

    public function store(Request $request)
    {
        $pro=new Producto();
        $pro->nombre=$request->nombre;
        $pro->precio=$request->precio;
        $pro->descripcion=$request->descripcion;
        $pro->categoria=$request->categoria;

        // return $request->all();
        $pro->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('producto.mostrar', $pro->id);

    }
}
