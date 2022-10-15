<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RutaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"=> $this->faker->randomElement($array = array ('1','2','3','4','5','6','7','8','9','10')),
            "tipo"=>$this->faker->randomElement($array = array ('calientes','frios'))
        ];
    }
}
