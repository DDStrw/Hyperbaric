<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('booking', [BookingController::class, 'booking']);
Route::post('/post', [BookingController::class, 'store']);
Route::post('/cek', [BookingController::class, 'cek'])->name('booking.check');
Route::get('/get_seat_status', [BookingController::class, 'getSeatStatus']);
// routes/web.php
Route::post('/cek_kode_booking', [BookingController::class, 'checkBooking']);
Route::post('/check-date', [BookingController::class, 'checkDate'])->name('check.date');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
