<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_booking', 'name', 'no_hp', 'alamat', 'tgl_booking', 'tgl_datang', 'bukti_bayar'
    ];

    public function seats()
    {
        return $this->belongsToMany(Seats::class, 'booking_seat', 'booking_id', 'seat_id');
    }
}
