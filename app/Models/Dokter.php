<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    /** @use HasFactory<\Database\Factories\DokterFactory> */
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable = ['nama', 'email', 'password', 'no_telepon', 'keahlian'];
}
