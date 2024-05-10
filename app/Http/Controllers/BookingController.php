<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
class BookingController extends Controller
{
    public function booking(){

        return view('booking');
    }
}
