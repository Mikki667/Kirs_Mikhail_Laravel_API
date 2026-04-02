<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Director;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * In order to my custom data for the movies to work I had to add a factory for the movies as well.
     * 
     * I also slighly modified the code by adding a small check for the directors id
     * The idea is that if for some reason  there are no directors in the database it will not break the code
     * 
     * @return array
     */
    public function definition()
    {
        $director = Director::inRandomOrder()->first();
        return [
            //
            'title' => $this->faker->name,
            'director_id' => $director ? $director->id : null,
        ];
    }
}
