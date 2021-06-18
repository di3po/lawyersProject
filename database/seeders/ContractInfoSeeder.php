<?php

namespace Database\Seeders;

use App\Models\ContractInfo;
use Illuminate\Database\Seeder;

class ContractInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContractInfo::factory()->count(5)->create();
    }
}
