<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsumoDanado extends Model
{
    use HasFactory;

    protected $table = 'insumo_danados';
    protected $fillable = [
        'id_lote', 'id_examen_laboratorio', 'id_empleado', 
        'id_tipo_dano', 'cantidad', 'descripcion', 'fecha_registro'
    ];

    public function lote()
    {
        return $this->belongsTo(Lote::class, 'id_lote');
    }

    public function examenLaboratorio()
    {
        return $this->belongsTo(ExamenLaboratorio::class, 'id_examen_laboratorio');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }

    public function tipoDano()
    {
        return $this->belongsTo(TipoDano::class, 'id_tipo_dano');
    }
}