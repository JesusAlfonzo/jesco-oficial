<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProveedorProducto extends Model
{
    use HasFactory;

    protected $table = 'proveedor_producto';
    protected $fillable = [
        'id_proveedor', 'id_producto', 
        'precio_habitual', 'tiempo_entrega_dias', 'es_principal'
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}