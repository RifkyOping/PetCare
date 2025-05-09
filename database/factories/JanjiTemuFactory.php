<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pengguna;
use App\Models\Hewan;
use App\Models\Dokter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Janji_Temu>
 */
class JanjiTemuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pengguna_id' => Pengguna::inRandomOrder()->first()?->id ?? Pengguna::factory(),
            'dokter_id' => Dokter::inRandomOrder()->first()?->id ?? Dokter::factory(),
            'hewan_id' => Hewan::inRandomOrder()->first()?->id ?? Hewan::factory(),
            'tanggal_janji' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->randomElement(['dijadwalkan', 'selesai', 'dibatalkan']),
        ];
    }
}
