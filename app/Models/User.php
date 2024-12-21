<?php

namespace App\Models;

use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function bukti(){
        return $this->hasMany(bukti::class);
    }

    public function Booking(){
        return $this->hasMany(Booking::class);
    }

    public function Transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function detailTransaksi(){
        return $this->hasMany(detailTransaksi::class);
    }

    public function rating(){
        return $this->belongsTo(rating::class);
    }

    public function Artikel(){
        return $this->hasMany(Artikel::class);
    }

    public function Barang(){
        return $this->hasMany(Barang::class);
    }

    public function role()
    {
        return $this->belongsTo(RoleMiddleware::class); 
    }


    /**
     * Kolom yang dapat diisi (mass assignable).
     */
    protected $fillable = [
        'full_name',
        'address',
        'email',
        'password',
        'phone',
        'image',
        'role'
    ];

    public function getRoleAttribute($value)
    {
        return ucfirst($value); // Menampilkan role dengan huruf kapital pertama
    }
    /**
     * Kolom yang disembunyikan saat serialisasi.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Kolom yang akan di-cast ke tipe data tertentu.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
