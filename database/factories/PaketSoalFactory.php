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
            "soal" => [
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
            // 'soal' => [
            //     'soal_pg_id' => $this->faker->numberBetween(1, 10),
            //     'pertanyaan' => $this->faker->sentence(),
            //     'jawaban' => [
            //         ['key_pilgan_id' => 1, 'pilihan' => 'ayam', 'value_pilihan' => $this->faker->numberBetween(1, 10)],
            //         ['key_pilgan_id' => 2, 'pilihan' => 'bebek', 'value_pilihan' => $this->faker->numberBetween(1, 10)],
            //         ['key_pilgan_id' => 3, 'pilihan' => 'cicak', 'value_pilihan' => $this->faker->numberBetween(1, 10)],
            //     ],
            // ]
            // 'soal' => [
            //     'size' => ['S', 'M', 'L'][rand(0,2)],
            //     'color' => ['S', 'M', 'L'][rand(0,2)],
            //     'origin' => ['S', 'M', 'L'][rand(0,2)],
            // ]
            // 'soal' => '
            // [
                //     {
                //         "soal_pg_id": 1,
                //         "pertanyaan": "apa yang dimaksud dengan kepala batu?",
                //         "jawaban" : [
                //             {"key_pilgan_id": 1, "pilihan": "ayam", "value_pilihan": 50},
                //             {"key_pilgan_id": 2, "pilihan": "bebk", "value_pilihan": 100},
                //             {"key_pilgan_id": 3, "pilihan": "cicak", "value_pilihan": 150}
                //         ]
                //     },
                //     {
                //         "soal_pg_id": 1,
                //         "pertanyaan": "apa yang dimaksud dengan kepala batu?",
                //         "jawaban" : [
                //             {"key_pilgan_id": 1, "pilihan": "ayam", "value_pilihan": 50},
                //             {"key_pilgan_id": 2, "pilihan": "bebk", "value_pilihan": 100},
                //             {"key_pilgan_id": 3, "pilihan": "cicak", "value_pilihan": 150}
                //         ]
                //     },
                //     {
                //         "soal_pg_id": 1,
                //         "pertanyaan": "apa yang dimaksud dengan kepala batu?",
                //         "jawaban" : [
                //             {"key_pilgan_id": 1, "pilihan": "ayam", "value_pilihan": 50},
                //             {"key_pilgan_id": 2, "pilihan": "bebk", "value_pilihan": 100},
                //             {"key_pilgan_id": 3, "pilihan": "cicak", "value_pilihan": 150}
                //         ]
                //     }
            // ]',
        ];
    }
}
