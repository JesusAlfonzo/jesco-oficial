<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Empleado;
use App\Models\Rol;
use App\Models\Movimiento;
use App\Models\Compra;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username', 'password', 'id_empleado', 'id_rol'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_usuario');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'id_usuario');
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}