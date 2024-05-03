<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transacciones extends Model
{
    use HasFactory;

    protected $table = 'transacciones';
    protected $primaryKey = 'ID_transacción';
    protected $fillable = ['Tipo_transacción', 'Fecha_transacción', 'ID_usuario', 'ID_contenido', 'Tipo_contenido'];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'ID_usuario', 'ID_usuario');
    }

    // Si deseas agregar más relaciones, puedes hacerlo aquí
}
