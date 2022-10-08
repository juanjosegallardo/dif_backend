<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Localidad;
use App\Models\Ruta;
use App\Models\Persona;

class Escuela extends Model
{
    use HasFactory;

    public function localidad(){
        return $this->belongsTo(Localidad::class);
    }

    public function ruta(){
        return $this->belongsTo(Ruta::class);
    }

    public function personas(){
        return $this->belongsToMany(Persona::class);
    }


    

}
