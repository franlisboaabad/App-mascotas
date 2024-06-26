<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'especie', 'raza', 'edad', 'descripcion', 'imagen', 'estado'];

    public function getGetImagenAttribute()
    {
        if ($this->imagen) {
            return url("storage/$this->imagen");
        }
    }

}
