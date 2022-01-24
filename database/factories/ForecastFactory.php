<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ForecastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'degree' => $this->faker->degree,
            'tempeture' => $this->faker->tempeture,
            'Feel_like' => $this->faker->Feel_like
        ];
    }
}
