<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_categoria', 'id_marca', 'id_presentacion', 
        'nombre', 'descripcion', 'precio_venta'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    public function presentacion()
    {
        return $this->belongsTo(Presentacion::class, 'id_presentacion');
    }

    public function lotes()
    {
        return $this->hasMany(Lote::class, 'id_producto');
    }

    public function proveedores()
    {
        return $this->belongsToMany(Proveedor::class, 'proveedor_producto', 'id_producto', 'id_proveedor')
                    ->withPivot('precio_habitual', 'tiempo_entrega_dias', 'es_principal');
    }

    public function examenes()
    {
        return $this->belongsToMany(Examen::class, 'examen_producto', 'id_producto', 'id_examen')
                    ->withPivot('cantidad_necesaria', 'instrucciones_uso');
    }

    public function departamentos()
    {
        return $this->belongsToMany(Departamento::class, 'departamento_producto', 'id_producto', 'id_departamento')
                    ->withPivot('stock_minimo', 'stock_maximo');
    }

    public function historicoPrecios()
    {
        return $this->hasMany(HistoricoPrecio::class, 'id_producto');
    }
}