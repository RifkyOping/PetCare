<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    /** @use HasFactory<\Database\Factories\RekamMedisFactory> */
    use HasFactory;
    protected $table = 'rekam_medis';
    protected $fillable = ['janji_temu_id', 'keluhan', 'diagnosa', 'tindakan', 'status'];
}
