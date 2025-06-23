<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_inventario', 'id_tipo_movimiento', 'id_usuario',
        'id_examen_laboratorio', 'cantidad', 'fecha_movimiento', 'motivo'
    ];

    public function inventario()
    {
        return $this->belongsTo(Inventario::class, 'id_inventario');
    }

    public function tipoMovimiento()
    {
        return $this->belongsTo(TipoMovimiento::class, 'id_tipo_movimiento');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function examenLaboratorio()
    {
        return $this->belongsTo(ExamenLaboratorio::class, 'id_examen_laboratorio');
    }
}