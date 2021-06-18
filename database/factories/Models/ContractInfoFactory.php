<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ContractInfo;

class ContractInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContractInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->word,
            'IIN' => $this->faker->word,
            'PassportNo' => $this->faker->word,
            'Given' => $this->faker->word,
            'period' => $this->faker->date(),
            'tel_num' => $this->faker->word,
            'address' => $this->faker->word,
        ];
    }
}
