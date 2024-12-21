<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'booking_id', 'tanggal_transaksi', 'total' ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function detailTransaksi()
    {
        return $this->hasMany(detailTransaksi::class);
    }

    public function Booking(){
        return $this->belongsTo(Booking::class);
    }

    // Fungsi menjumlahkan seluruh pemasukan
    public static function totalPemasukan()
    {
        return self::sum('pemasukan');
    }

    //fungsi menjumlahkan seluruh pengeluaran 
    public static function totalPengeluaran()
    {
        return self::sum('pengeluaran');
    }
}
