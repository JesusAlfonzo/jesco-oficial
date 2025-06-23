<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proveedor;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_proveedor', 'id_usuario', 'fecha_compra', 'total',
        'numero_factura', 'foto_factura'
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleCompra::class, 'id_compra');
    }

    public function impuestos()
    {
        return $this->hasMany(ImpuestoCompra::class, 'id_compra');
    }
}