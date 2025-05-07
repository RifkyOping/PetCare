<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $fillable = ['nama', 'email', 'password', 'no_telepon', 'alamat', 'role'];
}
