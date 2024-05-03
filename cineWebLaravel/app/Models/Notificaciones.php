<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    use HasFactory;

    protected $table = 'notificaciones';
    protected $primaryKey = 'ID_notificación';
    protected $fillable = ['Mensaje', 'Estado', 'Fecha_envío', 'ID_usuario'];

    public function usuario()
    {
        return $this->belongsTo(\Usuarios::class, 'ID_usuario', 'ID_usuario');
    }
}
