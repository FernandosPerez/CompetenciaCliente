<?php

namespace App\Http\Controllers;

use App\Calificar;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CalificarController extends Controller
{
    public function calificar($Id)
    {
        $calificar= Calificar::find($Id);
        return view("calificar",["calificar"=>$calificar]);

    }

    public function enviar(Request $data){

        $calificar = New Calificar();
        $calificar->Id=$data->Id;
        $calificar->satisfaccion=$data->satisfaccion;
        $calificar->save();
        return redirect()->route('inicio');
    }

}
