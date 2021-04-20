<?php

namespace App\Http\Controllers;
use App\pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function agregar(Request $data)
    {
        $pedido = new Pedido();
        $pedido->Id=$data->Id;
        $pedido->pedido=$data->pedido;
        $pedido->tiempo=$data->tiempo;
        $pedido->entregado=$data->entregado;
        $pedido->save();
        return redirect()->route('inicio');
    }

    public function load(){
        return view ("editar");
    }

    public function pedidos(Request $Id){
    $pedido = Pedido::all();

        return view('pedidos',["pedido"=>$pedido]);

    }

}
