<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_rol', 'permisos'];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'id_rol');
    }
}