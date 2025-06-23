<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_departamento');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'departamento_producto', 'id_departamento', 'id_producto')
                    ->withPivot('stock_minimo', 'stock_maximo');
    }
}