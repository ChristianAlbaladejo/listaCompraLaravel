@extends('layouts.app')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen genérica de los productos --}}
        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

    </div>
    <div class="col-sm-8">
        <h1>{{$producto->nombre}}</h1>
        <h6>{{$producto->categoria}}</h6>


 @if($producto->pendiente)
                <form action="{{ action('ProductoController@bcomprar') }}" method="POST">

                    {{method_field('PUT')}}
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto->id }}">
                    <input type="hidden" name="pendiente" value="{{ $producto->pendiente }}">
                    <button type="submit" class="btn btn-primary" >
                            Comprado

                        </button>
                </form>
            @else

                <form action="{{ action('ProductoController@bcomprar') }}" method="POST">

                    {{method_field('PUT')}}
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto->id }}">
                    <input type="hidden" name="pendiente" value="{{ $producto->pendiente }}">
                    <button type="submit" class="btn btn-danger">
                            Comprar

                        </button>
                </form>





            @endif

    <a class="btn btn-warning" href="../../productos/edit/{{$id}}">Editar producto</a>
    <a class="btn btn-light" href="../../productos/">Volver al listado</a>


    </div>
</div>

@stop
