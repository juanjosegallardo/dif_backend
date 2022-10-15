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
        Escuela::factory(10)->create();
    }
}
