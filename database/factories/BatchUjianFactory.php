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
    public $no = 1;
    public function definition()
    {
        return [
            'transaksi_id' => 1,
            'waktu_pelaksanaan' => '2022-06-06 11:30:00',
            'siswa' => [
                [
                "nama_siswa" => $this->faker->name(),
                // "token" => $this->faker->randomNumber(1),
                "token" => $this->no++,
                "tanggal_lahir" => '2022-06-04',
            ],[
                "nama_siswa" => $this->faker->name(),
                // "token" => $this->faker->randomNumber(1),
                "token" => $this->no++,
                "tanggal_lahir" => '2022-06-04',
            ],[
                "nama_siswa" => $this->faker->name(),
                // "token" => $this->faker->randomNumber(1),
                "token" => $this->no++,
                "tanggal_lahir" => '2022-06-04',
            ],[
                "nama_siswa" => $this->faker->name(),
                // "token" => $this->faker->randomNumber(1),
                "token" => $this->no++,
                "tanggal_lahir" => '2022-06-04',
            ],[
                "nama_siswa" => $this->faker->name(),
                // "token" => $this->faker->randomNumber(1),
                "token" => $this->no++,
                "tanggal_lahir" => '2022-06-04',
            ]
            ],
        ];
    }
}
