@extends('layout.layout')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="{{ asset('assets/img/hero-bg-light.webp') }}" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up" class="">Welcome to <span>Hyperbaric Dhira Brata</span></h1>
          <p data-aos="fade-up" data-aos-delay="100" class=""><br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=AdAANcYQKG8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
          <img src="{{ asset('assets/img/hero-services-img.webp') }}" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    {{-- <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exa</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section> --}}
    <!-- /Featured Services Section --> 
   

    <!-- Clients Section -->
    {{--<section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <!-- <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt=""> -->
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <!-- <img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""> -->
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <!-- <img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt=""> -->
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <!-- <img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt=""> -->
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <!-- <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt=""> -->
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <!-- <img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt=""> -->
          </div><!-- End Client Item -->

        </div>

      </div>

    </section>--}}<!-- /Clients Section -->

    <!-- Features Section -->
    {{-- <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">Features</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-binoculars"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-box-seam"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
                    <p>
                      Recusandae atque nihil. Delectus vitae non similique magnam molestiae sapiente similique
                      tenetur aut voluptates sed voluptas ipsum voluptas
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-brightness-high"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
                    <p>
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                      Debitis nulla est maxime voluptas dolor aut
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="{{ asset('assets/img/tabs-1.jpg') }}" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="{{ asset('assets/img/tabs-2.jpg') }}" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="{{ asset('assets/img/tabs-3.jpg') }}" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section --> --}}

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">

      <div class="container">

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            {{--<img src="{{ asset('assets/img/features-1.jpg') }}" class="img-fluid" alt="">--}}
          </div>

        {{--  <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Corporis temporibus maiores provident</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
              </p>
              <a href="#" class="btn more-btn">Learn More</a>
            </div>
          </div>

        </div><!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

            <div class="content">
              <h3>Neque ipsum omnis sapiente quod quia dicta</h3>
              <p>
                Quidem qui dolore incidunt aut. In assumenda harum id iusto lorena plasico mares
              </p>
              <ul>
                <li><i class="bi bi-easel flex-shrink-0"></i> Et corporis ea eveniet ducimus.</li>
                <li><i class="bi bi-patch-check flex-shrink-0"></i> Exercitationem dolorem sapiente.</li>
                <li><i class="bi bi-brightness-high flex-shrink-0"></i> Veniam quia modi magnam.</li>
              </ul>
              <p></p>
              <a href="#" class="btn more-btn">Learn More</a>
            </div>

          </div>
          --}}
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
          {{--<img src="{{ asset('assets/img/features-2.jpg') }}" class="img-fluid" alt="">--}}
          </div>

        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Details Section -->

    <!-- Services Section -->
    {{--<section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-activity icon"></i>
              <div>
                <h3>Nesciunt Mete</h3>
                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-broadcast icon"></i>
              <div>
                <h3>Eosle Commodi</h3>
                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-easel icon"></i>
              <div>
                <h3>Ledo Markt</h3>
                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-bounding-box-circles icon"></i>
              <div>
                <h3>Asperiores Commodi</h3>
                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-calendar4-week icon"></i>
              <div>
                <h3>Velit Doloremque.</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-chat-square-text icon"></i>
              <div>
                <h3>Dolori Architecto</h3>
                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>--}}<!-- /Services Section -->

    <!-- More Features Section -->
    {{--<section id="more-features" class="more-features section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h3>Enim quis est voluptatibus aliquid consequatur</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

            <div class="row">

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4>Nemo Enim</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4>Dine Pad</h4>
                  <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4>Tride clov</h4>
                  <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                </div>
              </div><!-- End Icon Box -->

            </div>

          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/features-3.jpg') }}" alt="">
          </div>

        </div>

      </div>

    </section>--}}<!-- /More Features Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            {{-- <p class="who-we-are">Who We Are</p> --}}
            <h3>Hyperbaric Dhira Brata by Hasta Brata </h3>
            <p class="fst-italic">
              Terapi oksigen hiperbarik adalah suatu cara pengobatan di mana peserta terapi bernafas dengan menghirup oksigen murni (100%) di dalam ruang udara bertekanan tinggi lebih 1 Atmosfer Absolut. Terapi oksigen hiperbarik merupakan terapi utama penyakit penyelaman seperti Decompression Sickness dan Emboli Gas Arteri, juga terapi utama pada keracunan gas CO2,HCN,H2S, dan juga merupakan terapi tambahan pada berbagai penyakit klinis.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Penyembuhan Luka dan Infeksi</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Mengurangi Gejala Keracunan Karbon Monoksida</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Perbaikan Cedera Jaringan dan Penyakit Dekompresi </span></li>
            </ul>
            <a href="booking" class="read-more"><span>Booking</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="{{ asset('assets/img/about-company-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="{{ asset('assets/img/about-company-2.jpg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="{{ asset('assets/img/about-company-3.jpg') }}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->
    <!-- Testimonials Section -->
    
        {{-- <!-- Faq Section -->
        <section id="faq" class="faq section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
          </div><!-- End Section Title -->
    
          <div class="container">
    
            <div class="row justify-content-center">
    
              <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
    
                <div class="faq-container">
    
                  <div class="faq-item faq-active">
                    <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                    <div class="faq-content">
                      <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
    
                  <div class="faq-item">
                    <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                    <div class="faq-content">
                      <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
    
                  <div class="faq-item">
                    <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                    <div class="faq-content">
                      <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
    
                  <div class="faq-item">
                    <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                    <div class="faq-content">
                      <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
    
                  <div class="faq-item">
                    <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                    <div class="faq-content">
                      <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
    
                  <div class="faq-item">
                    <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                    <div class="faq-content">
                      <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
    
                </div>
    
              </div><!-- End Faq Column-->
    
            </div>
    
          </div>
    
        </section><!-- /Faq Section --> --}}

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Paket</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Paket 3x</h3>
              <img src="{{ asset('assets/img/paket1.jpg') }}" class="img-fluid img-thumbnail mb-3" alt="Responsive image">
                <form action="{{ route('paket') }}" method="GET">
                  <input type="hidden" name="paket" value="1"> <!-- Paket 3x Terapi -->
                  <button type="submit" class="cta-btn">Pilih Paket</button>
                </form>
              {{-- <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex strater</p>
              <h4><sup>$</sup>0<span> / month</span></h4>

              <p class="text-center small">No credit card required</p> --}}

            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item ">
              {{-- <p class="description">Popular</p> --}}
              <h3>Paket 5x</h3>
              <img src="{{ asset('assets/img/paket1.jpg') }}" class="img-fluid img-thumbnail mb-3" alt="Responsive image">
                <form action="{{ route('paket') }}" method="GET">
                  <input type="hidden" name="paket" value="2"> <!-- Paket 5x Terapi -->
                  <button type="submit" class="cta-btn">Pilih Paket</button>
                </form>
              {{-- <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
              </ul> --}}
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Paket 10x</h3>
              <img src="{{ asset('assets/img/paket1.jpg') }}" class="img-fluid img-thumbnail mb-3" alt="Responsive image">
                <form action="{{ route('paket') }}" method="GET">
                  <input type="hidden" name="paket" value="3"> <!-- Paket 10x Terapi -->
                  <button type="submit" class="cta-btn">Pilih Paket</button>
                </form>
              {{-- <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
                <li><i class="bi bi-check"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
              </ul> --}}
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jl. Gajah Mada No.95, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65311</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>082130003801</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>batubhayangkara@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.01473841735444!2d112.5246202292084!3d-7.870375132690656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1715137224431!5m2!1sen!2sid"" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

@endsection

