<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
use App\Models\Escuela;
use App\Models\Ruta;

class Localidad extends Model
{
    use HasFactory;
    protected $table = 'localidades';
    protected $attributes = ["municipio_id"=>1];

    public function personas(){
        return $this->hasMany(Persona::class);
    }

    public function escuelas(){
        return $this->hasMany(Escuela::class);
    }

    public function rutas(){
        return $this->belongsToMany(Ruta::class, 'ruta_localidad');
    }
    
}