<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seats;
class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_booking', 'name', 'no_hp', 'alamat', 'tgl_booking', 'tgl_datang', 'bukti_bayar','status','paket'
    ];
    
    public function seats()
    {
        return $this->belongsToMany(Seats::class);
    }

    public static function generateBookingCode()
    {
        // Get the current date in 'Ymd' format
        $date = Carbon::now()->format('Ymd');
        $letter = 'A'; // You can change this to any letter or logic to pick a letter

        // Count the bookings for today
        $bookingCount = Booking::whereDate('tgl_booking', Carbon::today())->count();

        // Increment the count
        $increment = $bookingCount + 1;

        // Generate the booking code
        return $date . $letter . str_pad($increment, 4, '0', STR_PAD_LEFT);
    }   
}
