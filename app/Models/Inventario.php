<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lote', 'cantidad_disponible', 'ultima_actualizacion'
    ];

    public function lote()
    {
        return $this->belongsTo(Lote::class, 'id_lote');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_inventario');
    }
}