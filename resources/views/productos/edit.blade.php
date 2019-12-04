@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Editar Producto
         </div>
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form action="{{action('ProductoController@putEdit')}}" method="POST">
                 {{method_field('PUT')}}
            {{-- TODO: Protección contra CSRF --}}
            @csrf
            <input type="text" name="id" hidden value="{{$producto->id}}">
            <div class="form-group">
               <label for="title">Producto</label>
               <input type="text" name="title" id="title" class="form-control" value="{{$producto->id}}">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el año --}}
               <label for="precio">Precio</label>
               <input type="text" name="precio" id="precio" value="{{$producto->precio}}">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el director --}}
               <label for="categoria">Categoria</label>
               <input type="text" name="categoria" id="categoria" value="{{$producto->categoria}}">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el poster --}}
               <label for="imagen">Imagen</label>
               <input type="text" name="imagen" id="imagen" value="{{$producto->imagen}}">
            </div>

            <div class="form-group">
               <label for="descripcion">descripcion</label>
               <textarea name="descripcion" id="descripcion" class="form-control" rows="3" value="{{$producto->descripcion}}"></textarea>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Editar producto
               </button>
            </div>

            {{-- TODO: Cerrar formulario --}}
        </form>

         </div>
      </div>
   </div>
</div>



@stop
