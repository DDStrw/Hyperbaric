<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;



Route::get('/', function () {
    return view('index');
});

Route::get('booking', [BookingController::class, 'booking']);