<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenLaboratorio extends Model
{
    use HasFactory;

    protected $table = 'examen_laboratorios';
    protected $fillable = [
        'id_empleado', 'id_paciente', 'id_examen',
        'fecha_examen', 'observaciones'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function examen()
    {
        return $this->belongsTo(Examen::class, 'id_examen');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_examen_laboratorio');
    }

    public function insumosDanados()
    {
        return $this->hasMany(InsumoDanado::class, 'id_examen_laboratorio');
    }

    public function movimientosExamen()
    {
        return $this->hasMany(MovimientoExamen::class, 'id_examen_laboratorio');
    }
}