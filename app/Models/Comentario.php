<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tarea;


class Comentario extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "comentarios";

    public function tasks(): BelongsTo
    {
        return $this->belongsTo(Tarea::class);
    }
}
