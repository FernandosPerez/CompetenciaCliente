@extends('layouts.menu')

@section ('titulo')
@endsection
@section ('css')

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
            <td>pedido</td>
            <td>tiempo</td>
            <td>entregdo</td>
        </tr>
        <tr>


        @foreach($pedido as $pedido)
            <tr>
                <td>{{$pedido->Id}}</td>
                <td>{{$pedido->pedido}}</td>
                <td>{{$pedido->tiempo}}</td>
                <td>{{$pedido->entregado}}</td>

            </tr>

            @endforeach
            </tr>

    </table>

    </body>
    </html>

@endsection









