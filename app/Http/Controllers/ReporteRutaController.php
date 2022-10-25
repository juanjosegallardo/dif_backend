<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruta;
use App\Models\Localidad;

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

    public function reporteRutaEscuelaLocalidades(){
        $data['rutas'] = Ruta::where("rutas.tipo","=","calientes")
        ->with(["localidades"=>function($q){
            $q->with("escuelas");
        }])
        ->get();
        //return $data;
        return view("reporte-ruta-escuelas-localidades", $data);
    }

}