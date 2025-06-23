<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'rif', 'nombre_empresa', 'nombre_contacto', 'direccion',
        'pais', 'estado', 'email'
    ];

    public function telefonos()
    {
        return $this->hasMany(TelefonoProveedor::class, 'id_proveedor');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'id_proveedor');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'proveedor_producto', 'id_proveedor', 'id_producto')
                    ->withPivot('precio_habitual', 'tiempo_entrega_dias', 'es_principal');
    }
}