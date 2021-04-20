<?php

namespace App\Http\Controllers;

use App\Http\Models\Usuario;
use App\Pedido;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{

    public function mostrar(){
        $usuario = Usuario::all();

        return view('perfil',["usuario" => $usuario]);
    }

    /*
     foreach ($usuario as $usuario){
        $usuario->pedidos = Pedido::where("Id",$usuario->Id)->select("nombre")->get();
        }
     */


    public function form(){
        return view ('agregar');
    }

    public function registrar(Request $data){
        $usuario = new Usuario();
        $usuario ->nombre=$data->nombre;
        $usuario ->telefono=$data->telefono;
        $usuario ->direccion=$data->direccion;
        $usuario ->pedido=$data->pedido;
        $usuario ->save();
        return view('inicio');

    }

    public function ingresar(){
        $usuario = Usuario::all();
        return view("yo",["usuario" => $usuario]);

    }

    public function login(Request $data){
        echo json_encode($data->telefono);
        $aux=($data->telefono);
    $usuario=Usuario::select('SELECT Id From usuarios where telefono = ',$aux);

        if (isset($usuario)){
            $usuario = Usuario::all();
            return view('perfil',["usuario" => $usuario]);

        }else{
            echo json_encode("no estas registrado aun");
        }
    }

    public function cargar($Id){
        $usuario = Usuario::find($Id);
        return view('editar',["usuario"=>$usuario]);
    }


    public function cambiar(Request $data){
        $usuario = Usuario::find($data->Id);

        echo  json_encode($usuario);
        $usuario ->nombre=$data->nombre;
        $usuario ->telefono=$data->telefono;
        $usuario ->direccion=$data->direccion;
        $usuario ->pedido=$data->pedido;
        $usuario ->save();
       $usuario->save();

    if ($usuario->save()){

   echo json_encode("Los cambios se guardaron correctamente");
    }else{
   return view('editar',["usuario"=>$usuario]);
   echo json_encode("Error inoportuno");
    }

    }

    public function borrar(Request $data)
    {
        $usuario = Usuario::where('Id', $data->Idusuario);

        echo json_encode($usuario);
        $usuario->nombre = $data->nombre;
        $usuario->correo = $data->correo;
        $usuario->contraseña = $data->contraseña;
        $usuario->delete();
    }

}
