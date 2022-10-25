<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ap_paterno' => $this->faker->lastName(),
            'ap_materno' => $this->faker->lastName(),
            'nombre' => $this->faker->name(),
            'curp' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}'),
            'sexo' => $this->faker->titleMale(),
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'vulnerabilidad' => 'N/A',
            'localidad_id' => '1',
            'manzana' => $this->faker->citySuffix(),
            'calle' => $this->faker->streetName(),
            'colonia' => $this->faker->streetSuffix(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'estudiante' => $this->faker->boolean()
        ];
    }
}
