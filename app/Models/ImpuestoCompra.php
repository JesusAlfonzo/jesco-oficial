<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpuestoCompra extends Model
{
    use HasFactory;

    protected $table = 'impuesto_compras';
    protected $fillable = ['id_compra', 'tipo', 'porcentaje', 'monto'];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id_compra');
    }
}