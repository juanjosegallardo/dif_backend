<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocalidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_interno'=>$this->faker->regexify('[AP]+@[0-9]{4}'),
            'clave'=>$this->faker->regexify('[0-9]{3}'),
            'nombre'=>$this->faker->citySuffix(),
            'municipio_id'=>'1'
        ];
    }
}
