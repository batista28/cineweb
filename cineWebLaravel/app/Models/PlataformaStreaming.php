<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlataformaStreaming extends Model
{
    use HasFactory;

    protected $table = 'plataformas_streaming';
    protected $primaryKey = 'ID_plataforma';
    protected $fillable = ['Nombre_plataforma'];

    public function películas()
    {
        return $this->belongsToMany(Peliculas::class, 'peliculas_plataformas', 'ID_plataforma', 'ID_película')->withTimestamps();
    }
}
