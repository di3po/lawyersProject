<?php

namespace Database\Seeders;

use App\Models\Callback;
use Illuminate\Database\Seeder;

class CallbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Callback::factory()->count(5)->create();
    }
}
