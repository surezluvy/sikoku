<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JawabanSiswa>
 */
class JawabanSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'batch_id' => 1,
            'paket_soal_id' =>  1,
            'jawaban' => [
                [
                    [
                        "soal_pg_id" => 1,
                        "pertanyaan" => "Holloway Whitaker",
                        "jawaban" => [
                            "pilihan" => "Holloway Whitaker",
                            "value_pilihan" => 1
                        ]
                    ], [
                        "soal_pg_id" => 2,
                        "pertanyaan" => "Stephard",
                        "jawaban" => [
                            "pilihan" => "Siti",
                            "value_pilihan" => 2
                        ]
                    ],[
                        "soal_pg_id" => 3,
                        "pertanyaan" => "Lavonne Stewart",
                        "jawaban" => [
                            "pilihan" => "Bambang",
                            "value_pilihan" => 3
                        ]
                    ],
                ],
            ],
            'result' => 250,
        ];
    }
}
