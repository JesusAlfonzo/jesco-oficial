<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefonoProveedor extends Model
{
    use HasFactory;

    protected $table = 'telefono_proveedores';
    protected $fillable = ['id_proveedor', 'numero', 'tipo'];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}