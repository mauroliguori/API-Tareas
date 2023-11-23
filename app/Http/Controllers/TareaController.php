<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;


class TareaController extends Controller
{
    public function List(Request $request){
        return $tarea = Tarea::all();
    }

    public function Find(Request $request, $idTarea){
        return $tarea = Tarea::FindOrFail($idTarea);
    }

    public function Delete(Request $request, $idTarea){
        $tarea = Tarea::FindOrFail($idTarea);
        $tarea -> delete();
        return [ "message" => "Deleted"];
    }


    public function Update(Request $request, $idTarea){
        $tarea = Tarea::FindOrFail($idTarea);
        $tarea -> titulo = $request -> post("titulo");
        $tarea -> id_de_autor = $request -> post("id_de_autor");
        $tarea -> id_de_usuario_seleccionado = $request -> post("d_de_usuario_seleccionado");
        $tarea -> descripcion = $request -> post("descripcion");
        $tarea -> fecha_limite = $request -> post("fecha_limite");
        $tarea -> save();

        return $tarea;
    }

    public function Create(Request $request){
        $tarea = new tarea();
        $tarea -> titulo = $request -> post("titulo");
        $tarea -> id_de_autor = $request -> post("id_de_autor");
        $tarea -> id_de_usuario_seleccionado = $request -> post("id_de_usuario_seleccionado");
        $tarea -> descripcion = $request -> post("descripcion");
        $tarea -> fecha_limite = $request -> post("fecha_limite");
        $tarea -> save();

        return $tarea;
    }



   
}
