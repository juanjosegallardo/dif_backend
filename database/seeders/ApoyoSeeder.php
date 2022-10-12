<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apoyo;

class ApoyoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*
     $table->string("dependencia");
            $table->string("programa");
            $table->string("modalidad");
     */
    public function run()
    {
        Apoyo::create([
            "dependencia"=>"a1",
            "programa"=>"a1",
            "modalidad"=>"b"
        ]);
        
    }
}
