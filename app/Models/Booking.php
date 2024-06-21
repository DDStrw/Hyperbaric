<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seats;
class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_booking', 'name', 'no_hp', 'alamat', 'tgl_booking', 'tgl_datang', 'bukti_bayar','status'
    ];
    
    public function seats()
    {
        return $this->belongsToMany(Seats::class);
    }
}
