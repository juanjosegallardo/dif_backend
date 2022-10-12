<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Escuela;

class EscuelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        Escuela::create([
            "ruta_id"=>"1",
            "plantel"=>"E1",
            "localidad_id"=>"1",
            "marginacion"=>"M1",
            "cct"=>"cct1",
            "nivel"=>"n1",
            "municipio_id"=>"1"
        ]);
    }
}
