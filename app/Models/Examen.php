<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'descripcion'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'examen_producto', 'id_examen', 'id_producto')
                    ->withPivot('cantidad_necesaria', 'instrucciones_uso');
    }

    public function examenesLaboratorio()
    {
        return $this->hasMany(ExamenLaboratorio::class, 'id_examen');
    }
}