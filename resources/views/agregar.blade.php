@extends('layouts.menu')

@section ('titulo')
@endsection
@section ('css')
    <link href={{asset('css/diseno.css')}} rel="stylesheet">
@endsection

@section ('contenido')
    <center>
<h1>Agregar Usuario</h1>

<form action="{{route('registro')}}" method="post" style="border-bottom-color: #0f6848">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <label>telefono:</label>
    <input type="number" name="telefono" required>
    <br>
    <label>direccion:</label>
    <input type="text" name="direccion" required>
    <br>
    <label>Pedido:</label>
    <input type="text" name="pedido" required>
    <br>
    <input type="submit" value="agregar">

</form>
</center>
@endsection
