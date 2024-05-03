<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalificacionesPelicula extends Model
{
    use HasFactory;

    protected $table = 'calificaciones_películas';
    protected $primaryKey = 'ID_calificación_película';
    protected $fillable = ['Puntuación', 'Comentario', 'ID_usuario', 'ID_película'];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'ID_usuario');
    }

    public function pelicula()
    {
        return $this->belongsTo(Peliculas::class, 'ID_película');
    }
}
