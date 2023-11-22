<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function ListarComentarioDeUnaTarea(Request $request, $idTarea){
        $tarea = Tarea::FindOrFail($idTarea);
        $comentarios = $tarea->comentarios;
        return $comentarios;
    }

    public function Find(Request $request, $idComentario){
        return $comentario = Comentario::FindOrFail($idComentario);
    }

    public function BorrarComentarioDeUnaTarea(Request $request, $idComentario){
        $comentario = Comentario::FindOrFail($idComentario);
        $comentario -> delete();
        return [ "message" => "Comentario Borradito"];
    }


    public function ActualizarComentarioDeUnaTarea(Request $request, $idComentario){
        $comentario = Comentario::FindOrFail($idComentario);
        $comentario -> id_de_usuario = $request -> post("id_de_usuario");
        $comentario -> descripcion = $request -> post("descripcion");
        $comentario -> save();
        return $comentario;
        
    }

    public function CrearComentarioDeUnaTarea(Request $request, $idTarea){
        $comentario = new Comentario();
        $comentario -> id_de_usuario = $request -> post("id_de_usuario");
        $comentario -> tarea_id = $idTarea;
        $comentario -> descripcion = $request -> post("descripcion");
        $comentario -> save();
        return $comentario;
    }

}
