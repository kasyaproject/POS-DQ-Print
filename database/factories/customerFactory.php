<?php

namespace Database\Factories;

use Faker\Factory as data;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class customerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = data::create();
        return [
            //
            'nama_cust' => $faker->name(),
            'no_telp' => $faker->phoneNumber(),
        ];
    }
}
