<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Localidad;
use App\Models\Municipio;
use App\Model\Escuela;
use App\Model\Apoyo;


class Persona extends Model
{
    use HasFactory;

    public function localidad(){
        return $this->belongsTo(Localidad::class);
    }

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }

    public function escuelas(){
        return $this->belongsToMany(Escuela::class);
    }

    public function apoyos(){
        return $this->belongsToMany(Apoyo::class);
    }
}
