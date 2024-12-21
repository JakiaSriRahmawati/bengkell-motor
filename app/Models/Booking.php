<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'status_pembayaran',
        'status_orderan',
        'status_service',
        'merek_motor',
        'mesin_motor',
        'seri_motor',
        'no_plat',
        'jenis_service',
        'tgl_service',
        'deskripsi'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Transaksi(){
        return $this->belongsTo(Transaksi::class);
    }

    public function bukti()
    {
        return $this->belongsTo(bukti::class, 'booking_id');
    }

    public function detailTransaksis()
    {
        return $this->hasMany(detailTransaksi::class);
    }
}
