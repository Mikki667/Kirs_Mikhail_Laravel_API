<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * I noticed that in the class code "the BookSeeder" uses random or standard generated data
     * so I decided to go a different way and manually add the data instead
     * 
     * At first I used "create" the data,  
     * but after talking to my teacher he reccomended to use "factory" 
     * as it is also a part of the requrments
     * so I changed the way I am putting my own data
     *
     * @return void
     */
    public function run()
    {
        Director::factory()->create(['name' => 'George Lucas']);
        Director::factory()->create(['name' => 'Martin Scorsese']);
        Director::factory()->create(['name' => 'Quentin Tarantino']);
        Director::factory()->create(['name' => 'Robert Zemeckis']);
        Director::factory()->create(['name' => 'Michael Bay']);
    }
}
