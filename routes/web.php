<?php

use App\Http\Controllers\CalificarController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('usuarios');
});

Route::get('usuarios',[UsuarioController::class,'mostrar'])->name('inicio');


Route::get('ingresar',[UsuarioController::class,'ingresar']);
Route::post('ingresar',[UsuarioController::class,'login'])->name("log");



Route::get('usuarios/agregar',[UsuarioController::class,'form'])->name("agregar");
Route::post('usuarios/agregar',[UsuarioController::class,'registrar'])->name('registro');

Route::get('usuarios/perfil/{Id}',[UsuarioController::class,'cargar'])->name('usuario.perfil');
Route::get('usuarios/pedidos/{Id}',[PedidoController::class,'pedidos'])->name('pedidos');
Route::get('usuarios/calificar/{Id}',[CalificarController::class,'calificar'])->name('calificar');
Route::post('usuarios/calificar',[CalificarController::class,'enviar'])->name('mandar');
Route::post('usuarios/editar',[UsuarioController::class,'cambiar'])->name('editar');

Route::post('usuarios/agregar/pedido',[PedidoController::class,'agregar'])->name('agregar.pedido');
Route::get('usuarios/agregar/pedido',[PedidoController::class,'cargar']);




