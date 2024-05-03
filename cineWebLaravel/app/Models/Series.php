<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $table = 'series';
    protected $primaryKey = 'ID_serie';
    protected $fillable = ['Título', 'Sinopsis', 'Género', 'Año_lanzamiento', 'Director', 'Enlace_imagen', 'Puntuación_media', 'Cantidad_votos', 'Temporadas', 'Estado_emisión'];

    // Relación con la tabla de actores


    // Otras relaciones si es necesario
}
