<?php

namespace Database\Seeders;

use App\Models\LawyersProjects;
use Illuminate\Database\Seeder;

class LawyersProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LawyersProjects::factory()->count(5)->create();
    }
}
