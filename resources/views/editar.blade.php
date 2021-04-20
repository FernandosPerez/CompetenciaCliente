
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
        <title>EDITAR INFORMACION</title>
    </head>
    <body>

    <h1>editar tu informacion</h1>
    <form method="post" action="{{route('editar')}}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required value="{{$usuario->nombre}}">
        <br>
        <label>telefono:</label>
        <input type="number" name="telefono" required value="{{$usuario->telefono}}">
        <br>
        <label>direccion:</label>
        <input type="text" name="direccion" required value="{{$usuario->direccion}}">
        <br>
        <label>Pedido:</label>
        <input type="text" name="pedido" required value="{{$usuario->direccion}}">
        <br>
        <input type="hidden" name="Id" value="{{$usuario->Id}}">
        <input type="submit" value="editar">

    </form>

    <br>
    <hr>
    <h2>Registrar pedido</h2>
    <form method="post" action="{{route('agregar.pedido')}}">
        @csrf
        <input type="hidden" name="Id" value="{{$usuario->Id}}">
        <label>pedido:</label>
        <input type="text" name="pedido" required >
        <br>
        <label>tiempo:</label>
        <input type="text" name="tiempo" required >
        <br>
        <label>entregado:</label>
        <input type="text" name="entregado" required >
        <br>
        <input type="submit" value="editar">

    </form>

    </body>
    </html>

@endsection







