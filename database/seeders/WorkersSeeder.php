<?php

namespace Database\Seeders;

use App\Models\Workers;
use Illuminate\Database\Seeder;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workers::factory()->count(5)->create();
    }
}
