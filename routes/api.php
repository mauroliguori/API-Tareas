<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Middleware\Autenticacion;  
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;

Route::prefix('v1')->group(function () {
    Route::get("/tareas",[TareaController::class,'List']);
    Route::get("/tareas/{d}",[TareaController::class,'Find']);
    Route::post("/tareas",[TareaController::class,'Create'])->middleware(Autenticacion::class);
    Route::delete("/tareas/{d}",[TareaController::class,'Delete'])->middleware(Autenticacion::class);
    Route::put("/tareas/{d}",[TareaController::class,'Update'])->middleware(Autenticacion::class);
    
    Route::post("/categorias",[CategoriaController::class,'Create'])->middleware(Autenticacion::class);
    Route::put("/categorias/{d}",[CategoriaController::class,'Update'])->middleware(Autenticacion::class);
    Route::get("/categorias",[CategoriaController::class,'List']);

    Route::post("/tareas/{idtareas}/categorias/{idcategorias}",[CategoriaController::class,'AgregarCategoriaParaUnaTarea'])->middleware(Autenticacion::class);
    Route::delete("/tareas/{idtareas}/categorias/{idcategorias}",[CategoriaController::class,'BorrarCategoriaParaUnaTarea'])->middleware(Autenticacion::class);
    
    Route::get("/tareas/{idtareas}/comentarios",[ComentarioController::class,'ListarComentarioTarea']);//->middleware(Autenticacion::class);

});
