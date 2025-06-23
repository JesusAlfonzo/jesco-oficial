<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDano extends Model
{
    use HasFactory;

    protected $table = 'tipo_danos';
    protected $fillable = ['nombre'];

    public function insumosDanados()
    {
        return $this->hasMany(InsumoDanado::class, 'id_tipo_dano');
    }
}