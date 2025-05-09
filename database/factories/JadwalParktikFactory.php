<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dokter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JadwalParktik>
 */
class JadwalParktikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dokter_id' => Dokter::inRandomOrder()->first()?->id ?? Dokter::factory(),
            'hari' => $this->faker->randomElement(['senin', 'selasa', 'rabu', 'kamis', 'jumat']),
        ];
    }
}
