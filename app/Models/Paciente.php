<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['codigo_externo', 'nombre', 'apellido', 'cedula'];

    public function examenesLaboratorio()
    {
        return $this->hasMany(ExamenLaboratorio::class, 'id_paciente');
    }
}