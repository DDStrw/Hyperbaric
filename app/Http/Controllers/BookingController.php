<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Seats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Booking_seat;

class BookingController extends Controller
{
    public function booking(Request $request){
        $selectedPackage = $request->session()->get('selectedPackage', 0);
        return view('booking', compact('selectedPackage'));
    }
    public function paket(Request $request){
        $selectedPackage = $request->input('paket', 0); // Default to 0 if no package is selected
        return redirect()->route('booking')
                         ->with('selectedPackage', $selectedPackage)
                         ->withFragment('about');
    }
    
    public function checkBooking(Request $request)
    {
        try {
            $kodeBooking = $request->input('kode_booking');
    
            // Retrieve the booking based on the booking code
            $booking = Booking::where('kode_booking', $kodeBooking)->first();
    
            if ($booking) {
                // Booking found
                // $bookingId = $booking->id;
                // $seatlist = Seats::where('booking_id', $bookingId)->get();
    
                return response()->json([
                    'status' => 'found',
                    'booking' => $booking
                    // 'seatlist' => $seatlist
                ]);
            } else {
                // Booking not found
                return response()->json([
                    'status' => 'not_found',
                    'message' => 'Booking not found'
                ]);
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Error checking booking: ' . $e->getMessage());
    
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred. Please try again.'
            ], 500);
        }
    }
    
    
    
    public function cek(Request $request)
    {
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
    
        // Check if the booking already has a payment proof
        if ($booking->bukti_bayar) {
            return redirect()->back()->withErrors(['bukti_bayar' => 'Bukti pembayaran sudah ada.']);
        }
    
        // Handle the file upload
        $path = $paymentProof->store('bukti_bayar', 'public'); // Save in storage/app/public/payment_proofs
    
        // Update the booking record with the path to the proof of payment
        $booking->update(
            ['bukti_bayar' => $path],
            ['status' => 'Sudah Bayar']
        );
    
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


        $bookingCode = Booking::generateBookingCode();
        // Create a new booking
        $booking = Booking::create([
            'kode_booking' => $bookingCode, // Generate a unique booking code
            'name' => $request->input('name'),
            'no_hp' => $request->input('no'),
            'alamat' => $request->input('alamat'),
            'tgl_booking' => now(), // Assuming booking date is the current date
            'tgl_datang' => $request->input('date'),
            'status' => 'Booking',
            'paket' => $request->input('paket')
        ]);

        // Attach the selected seats to the booking
        foreach ($request->input('seats') as $kd_seat) {
            $seat = Seats::where('kd', $kd_seat)->first();
            if ($seat) {
            // Create a new BookingSeat entry
            Booking_seat::create([
                'booking_id' => $booking->id,
                'seat_id' => $seat->id
            ]);
            } else {
                \Log::error('Seat not found: ' . $kd_seat);
            }
        }

        return redirect()->back()->with('success', 'Booking created successfully.');
    }

    public function validasi($id)
    {
        // Temukan booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Lakukan validasi status
        $booking->status = 'Tervalidasi';
        $booking->save();

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Booking telah divalidasi.');
    }


    public function checkDate(Request $request)
    {
        $date = $request->input('date');
    
        $bookedSeats = DB::table('seats as st')
            ->join('booking_seat as bs', 'st.id', '=', 'bs.seat_id')
            ->join('bookings as bk', 'bs.booking_id', '=', 'bk.id')
            ->where('bk.tgl_datang', $date)
            ->groupBy('st.kd')
            ->pluck('st.kd')
            ->toArray();
    
        // Log::info('Booked Seats:', $bookedSeats);
        return response()->json($bookedSeats);
    }
    
}