<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Categoria;
use App\Models\Comentario;

class Tarea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "tareas";
    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class, 'tareas_categorias', 'tarea_id', 'categoria_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comentario::class);
    }
}