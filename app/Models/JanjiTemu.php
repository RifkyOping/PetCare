<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JanjiTemu extends Model
{
    /** @use HasFactory<\Database\Factories\JanjiTemuFactory> */
    use HasFactory;
    protected $table = 'janji_temu';
    protected $fillable = ['pengguna_id', 'dokter_id', 'hewan_id', 'tanggal_janji', 'resep'];
}
