<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    use HasFactory;
    protected $fillable = ['kd'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}

