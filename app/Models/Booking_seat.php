<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
class Booking_seat extends Model
{
    use HasFactory;
    protected $table = 'booking_seat';
    protected $fillable = [
        'booking_id','seat_id'
    ];
}
