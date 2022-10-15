<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Localidad;
use App\Models\Municipio;
use App\Models\Escuela;
use App\Models\Apoyo;
use Carbon\Carbon;


class Persona extends Model
{
    use HasFactory;
    
    protected $appends = ['edad'];

    public function localidad(){
        return $this->belongsTo(Localidad::class);
    }

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }

    public function escuelas(){
        return $this->belongsToMany(Escuela::class, 'persona_escuela');
    }

    public function apoyos(){
        return $this->belongsToMany(Apoyo::class);
    }

    public function getEdadAttribute(){
        return Carbon::parse($this->fecha_nacimiento)->age;
    }


}
