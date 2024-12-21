<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti extends Model
{
    use HasFactory;
    protected $fillable = ['booking_id', 'user_id','foto'];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Booking(){
        return $this->hasMany(Booking::class);
    }
}
