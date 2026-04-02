<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * So I also decided to add the movies manually because I wanted to put my favorite movies here
     *
     * The same way as for my directors seeder I switched from "create" to "factory" for my movie seeder
     * 
     * @return void
     */
    public function run()
    {
        Movie::factory()->create([
            'title' => 'Star Wars: Episode I - The Phantom Menace',
            'director_id' => 1
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode II - Attack of the Clones',
            'director_id' => 1
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode III - Revenge of the Sith',
            'director_id' => 1
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode IV - A New Hope',
            'director_id' => 1
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode V - The Empire Strikes Back',
            'director_id' => 1
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode VI - Return of the Jedi',
            'director_id' => 1
        ]);

        Movie::factory()->create([
            'title' => 'The Wolf of Wall Street',
            'director_id' => 2
        ]);

        Movie::factory()->create([
            'title' => 'Goodfellas',
            'director_id' => 2
        ]);

        Movie::factory()->create([
            'title' => 'Casino',
            'director_id' => 2
        ]);

        Movie::factory()->create([
            'title' => 'The Irishman',
            'director_id' => 2
        ]);

        Movie::factory()->create([
            'title' => 'Taxi Driver',
            'director_id' => 2
        ]);

        Movie::factory()->create([
            'title' => 'Pulp Fiction',
            'director_id' => 3
        ]);

        Movie::factory()->create([
            'title' => 'Once Upon a Time in Hollywood',
            'director_id' => 3
        ]);

        Movie::factory()->create([
            'title' => 'Back to the Future',
            'director_id' => 4
        ]);

        Movie::factory()->create([
            'title' => 'Back to the Future Part II',
            'director_id' => 4
        ]);

        Movie::factory()->create([
            'title' => 'Back to the Future Part III',
            'director_id' => 4
        ]);

        Movie::factory()->create([
            'title' => 'The Walk',
            'director_id' => 4
        ]);

        Movie::factory()->create([
            'title' => 'Transformers',
            'director_id' => 5
        ]);

        Movie::factory()->create([
            'title' => 'Transformers: Revenge of the Fallen',
            'director_id' => 5
        ]);

        Movie::factory()->create([
            'title' => 'Transformers: Dark of the Moon',
            'director_id' => 5
        ]);

        Movie::factory()->create([
            'title' => 'Transformers: Age of Extinction',
            'director_id' => 5
        ]);
    }
}
