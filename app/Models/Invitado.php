<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;


    protected $fillable = ['nombre', 'apellidos', 'dni', 'celular', 'email', 'direccion', 'estado'];

    
}
