<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelolaKasir extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'nama', 'email', 'no_handphone',
    ];
}
