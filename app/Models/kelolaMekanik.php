<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelolaMekanik extends Model
{
    use HasFactory;
    protected $table = 'kelola_mekaniks';

    protected $fillable = [
        'image', 'nama', 'alamat', 'password', 'email', 'no_handphone',
    ];
}
