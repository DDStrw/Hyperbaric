<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    use HasFactory;
    protected $fillable = ['kd'];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_seat', 'seat_id', 'booking_id');
    }
}

