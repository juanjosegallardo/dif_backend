<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Escuela;

class Ruta extends Model
{
    use HasFactory;

    public function escuelas(){
        return $this->hasMany(Escuela::class);
    }
}
