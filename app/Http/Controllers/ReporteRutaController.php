<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruta;

class ReporteRutaController extends Controller
{
    public function reporteRutaLocalidad(){
        $data['rutas'] = Ruta::where("tipo","=","calientes")->with(["localidades"=>function($q){
            $q->with("personas");
        }])        
        ->get()
        ;
        return $data;
    }

}
