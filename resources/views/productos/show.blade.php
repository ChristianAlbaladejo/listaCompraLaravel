@extends('layouts.master')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen genérica de los productos --}}
        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

    </div>
    <div class="col-sm-8">
        <h1>{{$producto[0]}}</h1>
        <h6>{{$producto[1]}}</h6>


    <a class="btn btn-danger">Pendiente de compra</a>
    <a class="btn btn-warning" href="../../productos/edit/{{$id}}">Editar producto</a>
    <a class="btn btn-light" href="../../productos/">Volver al listado</a>


    </div>
</div>

@stop
