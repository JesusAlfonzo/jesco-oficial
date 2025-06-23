<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoExamen extends Model
{
    use HasFactory;

    protected $table = 'movimiento_examens';
    protected $fillable = [
        'id_examen_laboratorio', 'id_lote', 'cantidad_utilizada'
    ];

    public function examenLaboratorio()
    {
        return $this->belongsTo(ExamenLaboratorio::class, 'id_examen_laboratorio');
    }

    public function lote()
    {
        return $this->belongsTo(Lote::class, 'id_lote');
    }
}