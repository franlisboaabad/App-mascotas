<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportCaso extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombres',
        'tipo_animal',
        'descripcion_del_caso',
        'imagen',
        'contacto',
        'latitude',
        'longitude'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
