<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function ListarComentarioTarea(Request $request, $idTarea){
        $tarea = Tarea::FindOrFail($idTarea);
        $comentarios = $tarea->comentarios;
        return $comentarios;
    }

    public function Find(Request $request, $idComentario){
        return $comentario = Comentario::FindOrFail($idComentario);
    }
}
