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
            'alamat' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password123'),
            'no_telepon' => $this->faker->phoneNumber(),
            'spesialisasi' => $this->faker->randomElement([
                    'Anjing, Kucing',
                    'Burung, kelelawar',
                    'Domba, kuda, Sapi, Kambing',
                    'Reptil',
                    'Kelinci, Hamster',
                    'Kura-kura, Landak',
                    'Ikan',
                    'Cicak, Gecko, Kodok/Katak',
                    'Armadillo',
                ]),
        ];
    }
}
