<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BatchUjian>
 */
class BatchUjianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'transaksi_id' => 1,
            'tanggal_pelaksanaan' => '2022-06-04',
            'jam_pelaksanaan' => '00:00:00',
            'siswa' => [
                [
                "nama_siswa" => $this->faker->name(),
                "token" => $this->faker->randomNumber(5),
            ],[
                "nama_siswa" => $this->faker->name(),
                "token" => $this->faker->randomNumber(5),
            ],[
                "nama_siswa" => $this->faker->name(),
                "token" => $this->faker->randomNumber(5),
            ],[
                "nama_siswa" => $this->faker->name(),
                "token" => $this->faker->randomNumber(5),
            ],[
                "nama_siswa" => $this->faker->name(),
                "token" => $this->faker->randomNumber(5),
            ]
            ],
        ];
    }
}
