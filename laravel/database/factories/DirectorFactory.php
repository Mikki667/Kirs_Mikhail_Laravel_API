<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * In order to have my data I added a factory for directors 
     *
     * @return array
     */
    public function definition()
    {
        return [
            // can be ->name or ->name()
            'name' => $this->faker->name()
        ];
    }
}
