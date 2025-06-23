<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentoProducto extends Model
{
    use HasFactory;

    protected $table = 'departamento_producto';
    protected $fillable = ['id_departamento', 'id_producto', 'stock_minimo', 'stock_maximo'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}