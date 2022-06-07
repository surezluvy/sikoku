<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaketSoal>
 */
class PaketSoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_paket' => $this->faker->name(),
            'waktu_pengerjaan' => "02:30",
            'soal' => [
                [
                "pertanyaan" => "Joanna",
                "soal_pg_id" => 0,
                "jawaban" => [[
                    "key_pilgan_id" => 0,
                    "pilihan" => "Holloway Whitaker",
                    "value_pilihan" => 0
                ], [
                    "key_pilgan_id" => 1,
                    "pilihan" => "Crane Hanson",
                    "value_pilihan" => 1
                ], [
                    "key_pilgan_id" => 2,
                    "pilihan" => "Key Reed",
                    "value_pilihan" => 2
                ]],
            ], [
                "pertanyaan" => "Shepherd",
                "soal_pg_id" => 1,
                "jawaban" => [[
                    "key_pilgan_id" => 0,
                    "pilihan" => "Lilian Whitfield",
                    "value_pilihan" => 0
                ], [
                    "key_pilgan_id" => 1,
                    "pilihan" => "Lavonne Stewart",
                    "value_pilihan" => 1
                ], [
                    "key_pilgan_id" => 2,
                    "pilihan" => "Barber Bond",
                    "value_pilihan" => 2
                ]],
            ], [
                "pertanyaan" => "Sloan",
                "soal_pg_id" => 2,
                "jawaban" => [[
                    "key_pilgan_id" => 0,
                    "pilihan" => "Patton Lynch",
                    "value_pilihan" => 0
                ], [
                    "key_pilgan_id" => 1,
                    "pilihan" => "Jeanette Harper",
                    "value_pilihan" => 1
                ], [
                    "key_pilgan_id" => 2,
                    "pilihan" => "Moses Gregory",
                    "value_pilihan" => 2
                ]],
            ]],
        ];
    }
}
