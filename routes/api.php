<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Middleware\Autenticacion;  

Route::prefix('v1')->group(function () {
    Route::get("/tareas",[TareaController::class,'List']);
    Route::get("/tareas/{d}",[TareaController::class,'Find']);
    Route::post("/tareas",[TareaController::class,'Create'])->middleware(Autenticacion::class);
    Route::delete("/tareas/{d}",[TareaController::class,'Delete'])->middleware(Autenticacion::class);
    Route::put("/tareas/{d}",[TareaController::class,'Update'])->middleware(Autenticacion::class);
});
