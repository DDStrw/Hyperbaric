<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;



Route::get('/', function () {
    return view('index');
});

Route::get('booking', [BookingController::class, 'booking']);
Route::post('/post', [BookingController::class, 'store']);
Route::post('/cek', [BookingController::class, 'cek']);
Route::get('/get_seat_status', [BookingController::class, 'getSeatStatus']);
// routes/web.php
