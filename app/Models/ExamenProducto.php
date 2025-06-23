<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenProducto extends Model
{
    use HasFactory;

    protected $table = 'examen_producto';
    protected $fillable = [
        'id_examen', 'id_producto', 
        'cantidad_necesaria', 'instrucciones_uso'
    ];

    public function examen()
    {
        return $this->belongsTo(Examen::class, 'id_examen');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}