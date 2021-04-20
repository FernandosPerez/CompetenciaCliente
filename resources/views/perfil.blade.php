@extends('layouts.menu')

@section ('titulo')
@endsection
@section ('css')
    <link href="{{asset('css/diseno.css')}}" rel="stylesheet">
@endsection

@section ('contenido')


    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

    <table border="1">

        <tr>
            <td>ID</td>
            <td>nombre</td>
            <td>telefono</td>
            <td>direccion</td>
            <td>pedido</td>
        </tr>
        <tr>
        @foreach($usuario as $usuario)
            <tr>
                <td><a href="{{route("usuario.perfil",$usuario->Id)}}">{{$usuario->Id}}</a></td>
                <td>{{{$usuario->nombre}}}</td>
                <td>{{{$usuario->telefono}}}</td>
                <td>{{{$usuario->direccion}}}</td>
                <td>{{{$usuario->pedido}}}</td>
                <td>{{{$usuario->pedidos}}}</td>
                <td><a href="{{route("pedidos",$usuario->Id)}}">mis pedidos</a></td>
                <td><a href="{{route("calificar",$usuario->Id)}}">enviar satisfacción</a></td>

            </tr>

            @endforeach
            </tr>

    </table>

    </body>
    </html>


@endsection



