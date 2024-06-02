<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Seats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
class BookingController extends Controller
{
    public function booking(){
        return view('booking');
    }
    public function checkBooking(Request $request)
    {
        $kodeBooking = $request->input('kode_booking');
    
        // Assume you have a Booking model and the booking code is stored in a 'kode_booking' column
        $booking = Booking::where('kode_booking', $kodeBooking)->first();
    
        if ($booking) {
            // Booking found
            return response()->json([
                'status' => 'found',
                'booking' => $booking
            ]);
        } else {
            // Booking not found
            return response()->json([
                'status' => 'not_found',
                'message' => 'Booking not found'
            ]);
        }
    }
    
    
    public function cek(Request $request){
        // Validate the request data
        $request->validate([
            'kd_book' => 'required|string',
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        // Retrieve the booking code and file
        $bookingCode = $request->input('kd_book');
        $paymentProof = $request->file('bukti_bayar');

        // Check if the booking code exists in the database
        $booking = Booking::where('kode_booking', $bookingCode)->first();

        if (!$booking) {
            return redirect()->back()->withErrors(['kd_book' => 'Kode Booking tidak ditemukan.']);
        }

        // Handle the file upload
        $path = $paymentProof->store('payment_proofs', 'public'); // Save in storage/app/public/payment_proofs

        // You might want to update the booking record with the path to the proof of payment
        $booking->update(['bukti_bayar' => $path]);

        // Return a success response or redirect to a success page
        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diunggah.');
    }
    public function getSeatStatus(Request $request)
    {
        // Ambil tanggal booking dari request
        $selectedDate = $request->input('date');
        // Query untuk mendapatkan daftar kursi yang sudah dipesan pada tanggal tertentu
        $bookedSeats = DB::table('bookings AS bk')
            ->join('booking_seat AS bs', 'bk.id', '=', 'bs.booking_id')
            ->join('seats AS s', 'bs.seat_id', '=', 's.id')
            ->whereDate('bk.booking_date', $selectedDate)
            ->pluck('s.kd');

        // Mengembalikan daftar kursi yang sudah dipesan dalam bentuk JSON
        return response()->json($bookedSeats);
    }
    public function store(Request $request){
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'no' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'date' => 'required|date',
            'seats' => 'required|array', // Ensure seats is an array
            'seats.*' => 'exists:seats,kd' // Ensure each seat exists in the seats table
        ]);

        // Log the request data for debugging
        
        \Log::info('Request Data: ', $request->all());

        // Create a new booking
        $booking = Booking::create([
            'kode_booking' => uniqid(), // Generate a unique booking code
            'name' => $request->input('name'),
            'no_hp' => $request->input('no'),
            'alamat' => $request->input('alamat'),
            'tgl_booking' => now(), // Assuming booking date is the current date
            'tgl_datang' => $request->input('date')
        ]);

        // Attach the selected seats to the booking
        foreach ($request->input('seats') as $kd_seat) {
            $seat = Seats::where('kd', $kd_seat)->first();
            if ($seat) {
                $booking->seats()->attach($seat->id);
            } else {
                \Log::error('Seat not found: ' . $kd_seat);
            }
        }

        return redirect()->back()->with('success', 'Booking created successfully.');
    }

}
