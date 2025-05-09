<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JadwalParktik;

class Dokter extends Model
{
    /** @use HasFactory<\Database\Factories\DokterFactory> */
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable = ['nama', 'alamat','email', 'password', 'no_telepon', 'spesialisasi'];

    public function jadwalPraktik()
    {
        return $this->hasMany(JadwalParktik::class);
    }

}
