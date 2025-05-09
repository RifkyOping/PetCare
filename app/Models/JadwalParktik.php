<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalParktik extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalParktikFactory> */
    use HasFactory;
    protected $table = 'jadwal_praktik';
    protected $fillable = ['dokter_id', 'hari'];
}
