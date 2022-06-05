<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Key2d>
 */
class Key2dFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'soal_2d_id' => 1,
            'pilihan' =>  $this->faker->name(),
            'value_pilihan' => $this->faker->randomDigit(2),
        ];
    }
}
