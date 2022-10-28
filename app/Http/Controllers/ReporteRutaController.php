<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruta;
use App\Models\Localidad;
use App\Models\Escuela;

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

        $data['escuelas'] = Escuela::with(["localidad"=>function($q){
            $q->with(["rutas"=>function($q){
                $q->where("tipo", "=", "calientes");
            }]);
        }])
        ->get();
        //return $data;
        return view("reporte-ruta-escuelas-localidades", $data);
    }

}