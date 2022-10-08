<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Persona;


class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            LocalidadSeeder::class,
            MunicipioSeeder::class
        ]);
        Persona::create([
            'ap_paterno' => Str::random(10),
            'ap_materno' => Str::random(10),
            'nombre' => Str::random(10),
            'curp' => Str::random(10),
            'sexo' => Str::random(10),
            'fecha_nacimiento' => '2022-07-10',
            'vulnerabilidad' => Str::random(10),
            'municipio_id' => '1',
            'localidad_id' => '1',
            'manzana' => Str::random(10),
            'calle' => Str::random(10),
            'colonia' =>Str::random(10),
            'numero_exterior' => Str::random(10)
        ]);
    }
}
