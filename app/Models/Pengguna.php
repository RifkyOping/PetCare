<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $table = 'pengguna';
    protected $fillable = ['nama', 'email', 'password', 'no_telepon', 'alamat', 'role'];
}
