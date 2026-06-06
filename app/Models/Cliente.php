<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombres',
        'apellidos',
        'nit',
        'telefono',
        'email',
        'direccion',
        'ciudad',
        'razon_social',
        'tipo_cliente',
        'actividad'
    ];
}
