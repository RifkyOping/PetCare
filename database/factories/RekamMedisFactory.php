<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JanjiTemu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'janji_temu_id' => JanjiTemu::inRandomOrder()->first()?->id ?? JanjiTemu::factory(),
            'keluhan' => $this->faker->sentence(),
            'diagnosa' => $this->faker->sentence(),
            'tindakan' => $this->faker->sentence(),
            'resep' => $this->faker->words(3, true),

        ];
    }
}
