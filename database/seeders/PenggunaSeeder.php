<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::factory()->count(10)->create();

        DB::table('pengguna')->insert([
            [
                'nama' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123'),
                'no_telepon' => '085241175690',
                'alamat' => 'Kalukku',
                'role' => 'pengguna',
            ]
        ]);
    }
}
