<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tarea;

class Categoria extends Model
{
    use HasFactory, SoftDeletes;
 
    protected $table = "categorias";
    public function tareas(): BelongsToMany
    {
        return $this->belongsToMany(Tarea::class, 'tareas_categorias', 'categoria_id', 'tarea_id');
    }

}
