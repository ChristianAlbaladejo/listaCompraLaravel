<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Storage;
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
        return view('productos.edit', array('producto'=>$producto));
    }

    public function putEdit(Request $request)
    {
        $id = $request->input('id');
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->input('title');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        if($request->exists('imagen')) {
            $producto->imagen = Storage::disk('public')->putFile('imagenes', $request->file('imagen'));
        }
        $producto->descripcion = $request->input('descripcion');
        $producto->save();
        return redirect(action('ProductoController@getShow', ['id' => $producto->id]));
    }
    public function postCreate(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->input('title');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        if($request->exists('imagen')) {
            $producto->imagen = Storage::disk('public')->putFile('imagen', $request->file('imagen'));
        }
        $producto->descripcion = $request->input('descripcion');
        $producto->save();
        return redirect(action('ProductoController@getIndex', 'index'));
    }

    public function bcomprar(Request $request){
        $producto = Producto::findOrFail($request->input('id'));
        $producto->pendiente = $request->input('pendiente');
        $comprobador = $producto->pendiente = $request->input('pendiente');

        if ($comprobador == 0) {
            $producto->pendiente = 1;
        }else{
            $producto->pendiente = 0;
        }
        $producto->save();
        return redirect(action('ProductoController@getShow', ['id' => $producto->id-1]));
    }

}
