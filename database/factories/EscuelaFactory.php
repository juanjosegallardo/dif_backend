<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EscuelaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_interno'=>$this->faker->regexify('[0-9]{4}'),
            //"ruta_id"=>$this->faker->randomElement($array = array ('1','2','3','4','5','6','7','8','9','10')),
            "plantel"=>$this->faker->name(),
            "localidad_id"=>$this->faker->randomElement($array = array ('1','2','3','4','5','6','7','8','9','10')),
            "marginacion"=>$this->faker->randomElement($array = array ('bajo','muy bajo','medio','alto')),
            "cct"=>$this->faker->regexify('[0-9]{4}'),
            "nivel"=>$this->faker->randomElement($array = array ('primaria','secuendaria','prescolar','bachilerato'))
        ];
    }
}
