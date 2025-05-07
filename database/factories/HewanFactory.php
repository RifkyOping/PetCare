<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pengguna;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hewan>
 */
class HewanFactory extends Factory
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
            'nama' => $this->faker->LastName(),
            'jenis' => $this->faker->randomElement(['Kucing', 'Anjing', 'Kelinci', 'Burung']),
            'umur' => $this->faker->numberBetween(1, 15),
            'jenis_kelamin' => $this->faker->randomElement(['jantan', 'betina']),
        ];
    }
}
