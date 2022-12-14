<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class Apoyo extends Model
{
    use HasFactory;

    public function personas(){
        return $this->belongsToMany(Presona::class);
    }
}
