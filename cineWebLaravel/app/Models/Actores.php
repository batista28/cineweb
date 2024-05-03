<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actores extends Model
{
    use HasFactory;

    protected $table = 'actores';
    protected $primaryKey = 'ID_actor';
    protected $fillable = ['Nombre_actor', 'Edad', 'Fecha_Nacimiento', 'Nacionalidad'];

    // Definición de la relación con la tabla de películas
    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'ID_actor');
    }
}
