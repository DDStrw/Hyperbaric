@extends('layouts.menu')

@push('script')
    <script type="module">
        new datatables('#example');
    </script>
@endpush
@section('content')
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Booking</th>
                                    <th>Nama</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Tgl Booking</th>
                                    <th>Tgl Datang</th>
                                    <th>Status</th>
                                    <th>Bukti Bayar</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $index => $booking)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $booking->kode_booking }}</td>
                                    <td>{{ $booking->name }}</td>
                                    <td width="10%">{{ $booking->no_hp }}</td>
                                    <td width="15%">{{ $booking->alamat }}</td>
                                    <td width="5%">{{ $booking->tgl_booking }}</td>
                                    <td width="5%">{{ $booking->tgl_datang }}</td>
                                    <td width="5%">{{ $booking->status }}</td>
                                    <td>
                                        @if($booking->bukti_bayar)
                                            <a href="{{ asset('path/to/bukti_bayar/' . $booking->bukti_bayar) }}" target="_blank">View</a>
                                        @else
                                            Not Available
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Validasi</a>|
                                        <a href="#" class="btn btn-secondary btn-sm">Edit</a> |
                                        <form action="#" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>  
                                        
                                    </td>
                                </tr>
                            @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
