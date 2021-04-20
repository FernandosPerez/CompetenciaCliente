@extends('layouts.menu')

@section ('titulo')
@endsection
@section ('css')

@endsection

@section ('contenido')
    <center>
        <h1>Calificar mi satisfaccion </h1>

        <form action="{{route('mandar')}}" method="post" style="border-bottom-color: #0f6848">
            @csrf
            <label>Calificacion:</label>
            <input type="text" name="satisfaccion" >
            <br>
            <input type="submit" value="agregar">

        </form>
    </center>
@endsection
