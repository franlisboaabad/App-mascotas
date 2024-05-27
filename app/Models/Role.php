<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guard_name'];

    // Define las relaciones con los usuarios (puede ser muchos a muchos)
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
