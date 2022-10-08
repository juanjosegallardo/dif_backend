<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
use App\Models\Escuela;

class Localidad extends Model
{
    use HasFactory;

    public function personas(){
        return $this->hasMany(Persona::class);
    }

    public function escuelas(){
        return $this->hasMany(Escuela::class);
    }

    
}
