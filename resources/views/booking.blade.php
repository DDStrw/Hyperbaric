@extends('layout.layout')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-bg">
            <img src="{{ asset('assets/img/hero-bg-light.webp') }}" alt="">
        </div>
        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 data-aos="fade-up" class="">Welcome to <span>QuickStart</span></h1>
                <p data-aos="fade-up" data-aos-delay="100" class="">Quickly start your project now and set the stage
                    for
                    success<br></p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
                <img src="{{ asset('assets/img/hero-services-img.webp') }}" class="img-fluid hero-img" alt=""
                    data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>

    </section><!-- /Hero Section -->


    <section id="about" class="about section">

        <div class="container-fluid  ">
            <div class="row justify-content-md-center">
                <div class="col-md-9 ">
                    <!-- TAB Menu -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking"
                                type="button" role="tab" aria-controls="booking" aria-selected="true">Booking</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="kode_booking_tab" data-bs-toggle="tab"
                                data-bs-target="#kode_booking" type="button" role="tab" aria-controls="booking"
                                aria-selected="true">Booking</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                            <div class="card px-5 py-4 mt-5 shadow">
                                <h1 class="text-center mt-3 mb-4">Booking Jadwal Hyperbaric</h1>

                                <div class="nav nav-fill my-3">
                                    <label class="nav-link shadow-sm step0 border ml-2 ">Identitas</label>
                                    <label class="nav-link shadow-sm step1 border ml-2 ">Detail</label>
                                    {{-- <label class="nav-link shadow-sm step2 border ml-2 ">Pilih Kursi</label> --}}
                                </div>

                                <form action="/post" method="post" class="employee-form">
                                    @csrf
                                    <div class="form-section">

                                        <label for="">Nama</label>
                                        <input type="text" class="form-control mb-3" name="name" required>
                                        <label for="">Nomor yang bisa dihubungi</label>
                                        <input type="text" class="form-control mb-3" name="no" required>
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control mb-3" name="alamat" required>

                                        {{-- <label for="">Phone:</label>
                  <input type="number" class="form-control mb-3" name="phone" required> --}}
                                    </div>
                                    <div class="form-section">
                                        <label for="">Tanggal Booking</label>
                                        <input type="date" class="form-control mb-3" name="date" id="booking-date" required>
                                        <ol class="cabin fuselage">
                                            <li class="row row--1">
                                                <ol class="seats" type="A">
                                                    <li class="seat">
                                                        <input type="checkbox" id="OP1" disabled />
                                                        <label for="OP1">OP</label>
                                                    </li>
                                                    <li class="seat">
                                                        <input type="checkbox" id="1B" name="seats[]"
                                                            value="1B" />
                                                        <label for="1B">1B</label>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="row row--2">
                                                <ol class="seats" type="A">
                                                    <li class="seat">
                                                        <input type="checkbox" id="2A" name="seats[]"
                                                            value="2A" />
                                                        <label for="2A">2A</label>
                                                    </li>
                                                    <li class="seat">
                                                        <input type="checkbox" id="2B" name="seats[]"
                                                            value="2B" />
                                                        <label for="2B">2B</label>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="row row--3">
                                                <ol class="seats" type="A">
                                                    <li class="seat">
                                                        <input type="checkbox" id="3A" name="seats[]"
                                                            value="3A" />
                                                        <label for="3A">3A</label>
                                                    </li>
                                                    <li class="seat">
                                                        <input type="checkbox" id="3B" name="seats[]"
                                                            value="3B" />
                                                        <label for="3B">3B</label>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="row row--4">
                                                <ol class="seats" type="A">
                                                    <li class="seat">
                                                        <input type="checkbox" id="4A" name="seats[]"
                                                            value="4A" />
                                                        <label for="4A">4A</label>
                                                    </li>
                                                    <li class="seat">
                                                        <input type="checkbox" id="4B" name="seats[]"
                                                            value="4B" />
                                                        <label for="4B">4B</label>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="row row--5">
                                                <ol class="seats" type="A">
                                                    <li class="seat">
                                                        <input type="checkbox" id="5A" name="seats[]"
                                                            value="5A" />
                                                        <label for="5A">5A</label>
                                                    </li>
                                                    <li class="seat">
                                                        <input type="checkbox" id="OP2" disabled />
                                                        <label for="OP2">OP</label>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                    {{-- 
                <div class="form-section">
                  
                </div> --}}
                                    <div class="form-navigation mt-4">
                                        <button type="button" class="previous btn btn-secondary float-left">&lt;
                                            Previous</button>
                                        <button type="button" class="next btn btn-secondary float-right">Next
                                            &gt;</button>
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kode_booking" role="tabpanel" aria-labelledby="kode_booking">
                        <div class="card px-5 py-4 mt-5 shadow">
                            <h1 class="text-center mt-3 mb-4">Cek Kode Booking</h1>
                            <form action="/cek" method="post">
                                @csrf
                                <div class="form-class">
                                    <label for="">Kode Booking</label>
                                    <input type="text" class="form-control mb-3" name="kd_book" required>
                                    <label for="">Upload Bukti Bayar</label>
                                    <input type="file" class="form-control mb-3" name="bukti_bayar" accept="image/*"
                                        required>
                                </div>
                                <div class="form mt-4">
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section><!-- /About Section -->
@endsection

@push('custom-style')
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html {
            font-size: 16px;
        }

        .exit {
            position: relative;
            height: 50px;
        }

        .exit:before,
        .exit:after {
            content: "EXIT";
            font-size: 14px;
            line-height: 18px;
            padding: 0px 2px;
            font-family: "Arial Narrow", Arial, sans-serif;
            display: block;
            position: absolute;
            background: green;
            color: white;
            top: 50%;
            transform: translate(0, -50%);
        }

        .exit:before {
            left: 0;
        }

        .exit:after {
            right: 0;
        }



        ol {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .seats {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: flex-start;
        }

        .seat {
            display: flex;
            flex: 0 0 14.28571428571429%;
            padding: 5px;
            position: relative;
        }

        .seat:nth-child(3) {
            margin-right: 14.28571428571429%;
        }

        .seat input[type=checkbox] {
            position: absolute;
            opacity: 0;
        }

        .seat input[type=checkbox]:checked+label {
            background: #bada55;
            -webkit-animation-name: rubberBand;
            animation-name: rubberBand;
            animation-duration: 300ms;
            animation-fill-mode: both;
        }

        .seat input[type=checkbox]:disabled+label {
            background: #dddddd;
            /* text-indent: -9999px; */
            overflow: hidden;
        }

        /*
          .seat input[type=checkbox]:disabled+label:after {
            content: "OP";
            text-indent: 0;
            position: absolute;
            top: 4px;
            left: 50%;
            transform: translate(-50%, 0%);
          } */

        .seat input[type=checkbox]:disabled+label:hover {
            box-shadow: none;
            cursor: not-allowed;
        }

        .seat label {
            display: block;
            position: relative;
            width: 100%;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5rem;
            padding: 4px 0;
            background: #F42536;
            border-radius: 5px;
            animation-duration: 300ms;
            animation-fill-mode: both;
        }

        .seat label:before {
            content: "";
            position: absolute;
            width: 75%;
            height: 75%;
            top: 1px;
            left: 50%;
            transform: translate(-50%, 0%);
            background: rgba(255, 255, 255, 0.4);
            border-radius: 3px;
        }

        .seat label:hover {
            cursor: pointer;
            box-shadow: 0 0 0px 2px #5C6AFF;
        }

        @-webkit-keyframes rubberBand {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                -webkit-transform: scale3d(0.95, 1.05, 1);
                transform: scale3d(0.95, 1.05, 1);
            }

            75% {
                -webkit-transform: scale3d(1.05, 0.95, 1);
                transform: scale3d(1.05, 0.95, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes rubberBand {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                -webkit-transform: scale3d(0.95, 1.05, 1);
                transform: scale3d(0.95, 1.05, 1);
            }

            75% {
                -webkit-transform: scale3d(1.05, 0.95, 1);
                transform: scale3d(1.05, 0.95, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .rubberBand {
            -webkit-animation-name: rubberBand;
            animation-name: rubberBand;
        }
    </style>
@endpush

@push('custom-script')
    <script>
        $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {

                $sections.removeClass('current').eq(index).addClass('current');

                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);


                const step = document.querySelector('.step' + index);
                step.style.backgroundColor = "#17a2b8";
                step.style.color = "white";

            }

            function curIndex() {

                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });

            $('.form-navigation .next').click(function() {
                $('.employee-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });

            });

            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });

            navigateTo(0);
        });
    </script>
@endpush

@push('custom-script2')


<script>
$(document).ready(function() {
    // Fungsi untuk memperbarui status kursi berdasarkan data dari server
    function updateSeatStatus() {
        var selectedDate = $('#booking-date').val(); // Mendapatkan tanggal booking yang dipilih
        $.ajax({
            url: '/get_seat_status', // URL endpoint untuk mendapatkan status kursi dari server
            type: 'GET',
            data: { date: selectedDate }, // Mengirimkan data tanggal booking ke server
            success: function(response) {
                // Jika respons berhasil diterima dari server
                // response harus berisi data kursi yang sudah dipesan pada tanggal tersebut
                response.forEach(function(seat) {
                    // Menandai checkbox yang sesuai sebagai non-aktif (disabled)
                    $('#' + seat).prop('disabled', true);
                });
            },
            error: function(xhr, status, error) {
                // Jika terjadi kesalahan saat mengambil data dari server
                console.error(error);
            }
        });
    }

    // Panggil fungsi updateSeatStatus saat halaman dimuat
    updateSeatStatus();

    // Panggil fungsi updateSeatStatus saat tanggal booking berubah
    $('#booking-date').change(function() {
        updateSeatStatus();
    });
});
</script>

@endpush