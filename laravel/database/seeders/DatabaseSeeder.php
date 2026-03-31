<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // here I called my seeders for directors and movies
        $this->call([
            DirectorSeeder::class,
            MovieSeeder::class,
       ]);
    }
}
