<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password123'),
            'no_telepon' => $this->faker->phoneNumber(),
            'keahlian' => $this->faker->randomElement([
                    'Pemeriksaan Kesehatan Hewan',
                    'Bedah Hewan',
                    'Perawatan Gigi Hewan',
                    'Vaksinasi Hewan',
                    'Pengobatan Penyakit Hewan',
                    'Reproduksi Hewan',
                    'Diagnosa dan Terapi Penyakit Parasit',
                    'Ekspresionisme Hewan',
                    'Kardiologi Hewan',
                    'Onkologi Hewan',
                    'Anestesiologi Hewan',
                    'Orthopedi Hewan',
                    'Ginekologi Hewan'
                ]),
        ];
    }
}
