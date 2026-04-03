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
     * I added "image_url" for the movie seeder with the images I took from "https://www.themoviedb.org/" 
     * 
     * @return void
     */
    public function run()
    {
        Movie::factory()->create([
            'title' => 'Star Wars: Episode I - The Phantom Menace',
            'director_id' => 1,
            'image_url' => 'images/movies/phantom_menace.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode II - Attack of the Clones',
            'director_id' => 1,
            'image_url' => 'images/movies/attack_of_the_clones.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode III - Revenge of the Sith',
            'director_id' => 1,
            'image_url' => 'images/movies/revenge_of_the_sith.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode IV - A New Hope',
            'director_id' => 1,
            'image_url' => 'images/movies/new_hope.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode V - The Empire Strikes Back',
            'director_id' => 1,
            'image_url' => 'images/movies/empire_strikes_back.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Star Wars: Episode VI - Return of the Jedi',
            'director_id' => 1,
            'image_url' => 'images/movies/return_of_the_jedi.webp'
        ]);

        Movie::factory()->create([
            'title' => 'The Wolf of Wall Street',
            'director_id' => 2,
            'image_url' => 'images/movies/the_wolf_of_wall_st.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Goodfellas',
            'director_id' => 2,
            'image_url' => 'images/movies/good_fellas.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Casino',
            'director_id' => 2,
            'image_url' => 'images/movies/casino.webp'
        ]);

        Movie::factory()->create([
            'title' => 'The Irishman',
            'director_id' => 2,
            'image_url' => 'images/movies/the_irishman.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Taxi Driver',
            'director_id' => 2,
            'image_url' => 'images/movies/taxi_driver.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Pulp Fiction',
            'director_id' => 3,
            'image_url' => 'images/movies/pulp_fiction.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Once Upon a Time in Hollywood',
            'director_id' => 3,
            'image_url' => 'images/movies/once_upon_a_time_in.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Back to the Future',
            'director_id' => 4,
            'image_url' => 'images/movies/back_to_the_future1.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Back to the Future Part II',
            'director_id' => 4,
            'image_url' => 'images/movies/back_to_the_future2.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Back to the Future Part III',
            'director_id' => 4,
            'image_url' => 'images/movies/back_to_the_future3.webp'
        ]);

        Movie::factory()->create([
            'title' => 'The Walk',
            'director_id' => 4,
            'image_url' => 'images/movies/the_walk.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Transformers',
            'director_id' => 5,
            'image_url' => 'images/movies/transformers.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Transformers: Revenge of the Fallen',
            'director_id' => 5,
            'image_url' => 'images/movies/transformers2.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Transformers: Dark of the Moon',
            'director_id' => 5,
            'image_url' => 'images/movies/transformers3.webp'
        ]);

        Movie::factory()->create([
            'title' => 'Transformers: Age of Extinction',
            'director_id' => 5,
            'image_url' => 'images/movies/transformers4.webp'
        ]);
    }
}
