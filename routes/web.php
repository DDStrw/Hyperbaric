<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('booking', [BookingController::class, 'booking'])->name('booking');
Route::get('/paket', [BookingController::class, 'paket'])->name('paket');
Route::post('/post', [BookingController::class, 'store']);
Route::post('/cek', [BookingController::class, 'cek'])->name('booking.check');
Route::get('/get_seat_status', [BookingController::class, 'getSeatStatus']);
// routes/web.php
Route::post('/cek_kode_booking', [BookingController::class, 'checkBooking']);
Route::post('/check-date', [BookingController::class, 'checkDate'])->name('check.date');

Auth::routes();

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::put('booking/{id}/validasi', [BookingController::class, 'validasi'])->name('booking.validasi');