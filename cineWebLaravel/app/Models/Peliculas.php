<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Peliculas extends Model
{
    public function actores()
    {
        return $this->belongsToMany(Actores::class, 'peliculas_actores', 'ID_película', 'ID_actor');
    }
}
