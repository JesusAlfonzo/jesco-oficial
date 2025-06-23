<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_departamento', 'nombre', 'apellido', 'cedula', 
        'telefono', 'email', 'cargo', 'estado'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function usuario()
    {
        return $this->hasOne(User::class, 'id_empleado');
    }

    public function examenesRealizados()
    {
        return $this->hasMany(ExamenLaboratorio::class, 'id_empleado');
    }

    public function insumosDanados()
    {
        return $this->hasMany(InsumoDanado::class, 'id_empleado');
    }
}