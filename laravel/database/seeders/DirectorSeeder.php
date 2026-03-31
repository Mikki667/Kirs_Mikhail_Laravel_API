<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // I noticed that in the class code "the BookSeeder" uses random or standard generated data
        // so I decided to go a different way and manually add the data instead
        Director::create(['name' => 'George Lucas']);
        Director::create(['name' => 'Martin Scorsese']);
        Director::create(['name' => 'Quentin Tarantino']);
        Director::create(['name' => 'Robert Zemeckis']);
        Director::create(['name' => 'Michael Bay']);
    }
}
