<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'ID_usuario';
    protected $fillable = ['Nombre_usuario', 'Correo_electrónico', 'Contraseña', 'Preferencias_notificación', 'Fecha_registro'];
    protected $hidden = ['Contraseña']; // Oculta la contraseña al mostrar el modelo

    public function calificacionesPeliculas()
    {
        return $this->hasMany(CalificacionPelicula::class, 'ID_usuario', 'ID_usuario');
    }

    public function calificacionesSeries()
    {
        return $this->hasMany(CalificacionSerie::class, 'ID_usuario', 'ID_usuario');
    }
}
