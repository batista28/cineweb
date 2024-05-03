<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalificacionesSeries extends Model
{
    use HasFactory;

    protected $table = 'calificaciones_series';
    protected $primaryKey = 'ID_calificación_serie';
    protected $fillable = ['Puntuación', 'Comentario', 'ID_usuario', 'ID_serie'];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'ID_usuario');
    }

    public function serie()
    {
        return $this->belongsTo(Series::class, 'ID_serie');
    }
}
