<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create([
            'clave'=>"123456",
            'nombre'=>'Pénjamo'
        ]);
    }
}
