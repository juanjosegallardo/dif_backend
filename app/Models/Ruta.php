<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Escuela;
use App\Models\Localidad;

class Ruta extends Model
{
    use HasFactory;
    protected $table = 'rutas';

    /*
    public function escuelas(){
        return $this->hasMany(Escuela::class);
    }*/

    public function localidades(){
        return $this->belongsToMany(Localidad::class, 'ruta_localidad');
    }
}
