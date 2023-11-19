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
        $tarea -> nombre = $request -> post("nombre");
        $tarea -> tipo = $request -> post("tipo");
        $tarea -> precio = $request -> post("precio");
        $tarea -> gramos = $request -> post("gramos");
        $tarea -> save();

        return $tarea;
    }

    public function Create(Request $request){
        $tarea = new tarea();
        $tarea -> nombre = $request -> post("nombre");
        $tarea -> tipo = $request -> post("tipo");
        $tarea -> precio = $request -> post("precio");
        $tarea -> gramos = $request -> post("gramos");

        $tarea -> save();

        return $tarea;
    }
}
