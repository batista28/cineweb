<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeliculaPlataforma extends Model
{
    use HasFactory;

    protected $table = 'peliculas_plataformas';
    protected $primaryKey = 'ID_película_plataforma';
    protected $fillable = ['ID_película', 'ID_plataforma'];

    public function película()
    {
        return $this->belongsTo(Peliculas::class, 'ID_película', 'ID_película');
    }

    public function plataforma()
    {
        return $this->belongsTo(PlataformaStreaming::class, 'ID_plataforma', 'ID_plataforma');
    }
}
