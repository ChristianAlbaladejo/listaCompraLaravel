<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductoController extends Controller
{

    public function getIndex()
    {
        $producto = Producto::all();
        return view(
            'productos.index',
            array(
                'arrayProductos' => $producto
            )
        );

    }

    public function getShow($id)
    {
        $producto = Producto::findOrFail($id + 1);
        return view('productos.show', array(
            'producto' => $producto,
            'id' => $id
        ));
    }

    function getCreate()
    {
        return view('productos.create');
    }
    function getEdit($id)
    {
        $producto = Producto::findOrFail($id + 1);
        return view('productos.edit', array('producto' => $producto, 'id' => $id));
    }

    public function putEdit(Request $request)
    {
        $id = $request->input('id');
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->input('title');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();
        return redirect(action('ProductoController@getShow', $id));
    }
    public function postCreate(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->input('title');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();
        return redirect(action('ProductoController@getIndex', 'index'));
    }
}
