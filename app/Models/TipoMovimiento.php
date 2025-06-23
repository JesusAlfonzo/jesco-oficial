<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    use HasFactory;

    protected $table = 'tipo_movimientos';
    protected $fillable = ['nombre', 'descripcion', 'signo'];

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_tipo_movimiento');
    }
}