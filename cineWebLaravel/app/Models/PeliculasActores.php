<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeliculaActor extends Model
{
    use HasFactory;

    protected $table = 'películas_actores';
    protected $primaryKey = 'ID_película_actor';
    protected $fillable = ['ID_película', 'ID_actor'];

    public function película()
    {
        return $this->belongsTo(Peliculas::class, 'ID_película', 'ID_película');
    }

    public function actor()
    {
        return $this->belongsTo(Actores::class, 'ID_actor', 'ID_actor');
    }
}
