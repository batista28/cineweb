<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listas extends Model
{
    use HasFactory;

    protected $table = 'listas';
    protected $primaryKey = 'ID_lista';
    protected $fillable = ['Nombre_lista', 'Descripción', 'ID_usuario'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'ID_usuario', 'ID_usuario');
    }
}
