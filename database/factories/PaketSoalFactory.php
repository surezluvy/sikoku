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
            'soal' => '
            [
                {
                    "soal_pg_id": 1,
                    "pertanyaan": "apa yang dimaksud dengan kepala batu?",
                    "jawaban" : [
                        {"key_pilgan_id": 1, "pilihan": "ayam", "value_pilihan": 50},
                        {"key_pilgan_id": 2, "pilihan": "bebk", "value_pilihan": 100},
                        {"key_pilgan_id": 3, "pilihan": "cicak", "value_pilihan": 150}
                    ]
                },
                {
                    "soal_pg_id": 1,
                    "pertanyaan": "apa yang dimaksud dengan kepala batu?",
                    "jawaban" : [
                        {"key_pilgan_id": 1, "pilihan": "ayam", "value_pilihan": 50},
                        {"key_pilgan_id": 2, "pilihan": "bebk", "value_pilihan": 100},
                        {"key_pilgan_id": 3, "pilihan": "cicak", "value_pilihan": 150}
                    ]
                },
                {
                    "soal_pg_id": 1,
                    "pertanyaan": "apa yang dimaksud dengan kepala batu?",
                    "jawaban" : [
                        {"key_pilgan_id": 1, "pilihan": "ayam", "value_pilihan": 50},
                        {"key_pilgan_id": 2, "pilihan": "bebk", "value_pilihan": 100},
                        {"key_pilgan_id": 3, "pilihan": "cicak", "value_pilihan": 150}
                    ]
                }
            ]',
        ];
    }
}
