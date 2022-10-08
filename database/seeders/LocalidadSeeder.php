<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Localidad;

class LocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Localidad::create([
            'clave'=>"123456",
            'nombre'=>'localidad 1'
        ]);
        */
        DB::table('localidades')->insert([
            'clave'=>"123456",
            'nombre'=>'localidad 1'
        ]);
    }
}
