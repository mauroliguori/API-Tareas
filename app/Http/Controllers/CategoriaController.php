<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Tarea;

class CategoriaController extends Controller
{
    public function Create(Request $request){
        $categoria = new Categoria ();
        $categoria -> nombre = $request -> post("nombre");
        $categoria -> descripcion = $request -> post("descripcion");
        $categoria -> save();

        return $categoria;
    }

    public function Update(Request $request, $idCategoria){
        $categoria = Categoria::FindOrFail($idCategoria);
        $categoria -> nombre = $request -> post("nombre");
        $categoria -> descripcion = $request -> post("descripcion");
        $categoria -> save();

        return $categoria;
    }

    public function List(Request $request){
        return $categoria = Categoria::all();
    }

    public function AgregarCategoriaParaUnaTarea(Request $request, $idTarea, $idCategoria){
        $categoria = Categoria::FindOrFail($idCategoria);
        $tarea = Tarea::FindOrFail($idTarea);
        $tarea->categorias()->attach($categoria->id);

        if($tarea->categorias->contains($categoria->id))
            return ["mensaje"=>"Esta tarea ya contiene esta categoría"];
        $tarea->categorias()->attach($categoria->id);
        return ["mensaje"=>"ANDA FLAMAAA"];

    }


}
