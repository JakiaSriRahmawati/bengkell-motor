<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'jenis_layanan',
        'tanggal_service',
        'catatan_tambahan',
    ];

    protected $casts = [
        'jenis_layanan' => 'array',
    ];
}
