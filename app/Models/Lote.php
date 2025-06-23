<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_producto', 'codigo_lote', 
        'fecha_vencimiento', 'fecha_fabricacion'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function inventario()
    {
        return $this->hasOne(Inventario::class, 'id_lote');
    }

    public function insumosDanados()
    {
        return $this->hasMany(InsumoDanado::class, 'id_lote');
    }

    public function movimientosExamen()
    {
        return $this->hasMany(MovimientoExamen::class, 'id_lote');
    }
}