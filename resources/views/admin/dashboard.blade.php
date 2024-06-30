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
                                    <th>Paket</th>
                                    <th>Bukti Bayar</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $index => $booking)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $booking->kode_booking }}</td>
                                        <td>{{ $booking->name }}</td>
                                        <td width="10%">{{ $booking->no_hp }}</td>
                                        <td width="15%">{{ $booking->alamat }}</td>
                                        <td width="5%">{{ $booking->tgl_booking }}</td>
                                        <td width="5%">{{ $booking->tgl_datang }}</td>
                                        <td width="5%">{{ $booking->status }}</td>
                                        <td width="2%">
                                            @if ($booking->paket == 0)
                                                Tanpa Paket
                                            @elseif($booking->paket == 1)
                                                Paket 3x
                                            @elseif($booking->paket == 2)
                                                Paket 5x
                                            @elseif($booking->paket == 3)
                                                Paket 10x
                                            @else
                                                Unknown Paket
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal{{ $index }}">
                                                View Bukti Bayar
                                            </button>

                                            <!-- Modal Bukti Bayar-->
                                            <div class="modal fade" id="modal{{ $index }}" tabindex="-1"
                                                aria-labelledby="modalTitle{{ $index }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalTitle{{ $index }}">
                                                                Bukti Bayar</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            @if ($booking->bukti_bayar)
                                                                <img src="{{ asset('storage/' . $booking->bukti_bayar) }}"
                                                                    class="img-fluid" alt="Bukti Bayar">
                                                            @else
                                                                <p>Bukti Bayar Tidak Tersedia</p>
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{-- <a href="#" class="btn btn-primary btn-sm">Validasi</a>| --}}
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalValidasi{{ $index }}">
                                                Validasi
                                            </button> |

                                            <!-- Modal for Validasi -->
                                            <div class="modal fade" id="modalValidasi{{ $index }}" tabindex="-1"
                                                aria-labelledby="modalTitleValidasi{{ $index }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="modalTitleValidasi{{ $index }}">Validasi Booking
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Anda yakin ingin memvalidasi booking ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ route('booking.validasi', $booking->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit"
                                                                    class="btn btn-success">Validasi</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- Edit --}}
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
        {{--  --}}

    </div>
@endsection
