@extends('layouts.menu')

@section ('titulo')
@endsection
@section ('css')
    <link href={{asset('css/diseno.css')}} rel="stylesheet">
@endsection

@section ('contenido')

    <center>
    <h1>Ingresar</h1>

    <form action="{{route('log')}}" method="post">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>telefono:</label>
        <input type="number" name="telefono" required>
        <br>
        <input type="submit" value="Ingresar">

    </form>
        </center>
@endsection
