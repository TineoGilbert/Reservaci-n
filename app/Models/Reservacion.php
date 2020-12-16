<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    //use HasFactory;
    protected $table = 'reservaciones';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Email',
        'Fecha',
        'Hora',
        'Personas',
        'Mesa',
        'Celular'
    ];
}
