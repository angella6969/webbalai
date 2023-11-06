@extends('layout.content.main')
@section('container')
    <style>
        .info-transition {
            transition: opacity 0.5s;
            /* Transisi opacity selama 0.5 detik */
            opacity: 0;
            /* Mulai dengan elemen transparan */
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 20px;
            background: rgba(0, 0, 0, 0.3);
            color: white;
            padding: 5px 10px;
        }

        .left {
            left: 10px;
        }

        .right {
            right: 10px;
        }
    </style>


    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="4000" class="carousel carousel-fade" data-bs-ride="carousel">

            @foreach ($images as $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $image->image }}" style="width: 100vw; height: 100vh; object-fit: cover;" alt="Slide">
                </div>
            @endforeach

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
        <svg class="hero-waves" style="z-index: 996;" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="#030F6B">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="9" fill="#303EAB">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="15" fill="#7C89EB">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="20" fill="#303DAC">
            </g>
        </svg>

        <div class="col-lg-12" style="height: 10px; color:#fff; background: rgb(255, 255, 255); ">
            <div clas="col-xl-4" style="margin:0px 0px 20px 100px; "> </div>

        </div>

    </section>

    <div class="col-lg-12" style="height: 60px; color:#fff; background: rgb(232,170,28); ">
        <div class="container">
            <div class="row">
                <div class="col-2" style="margin:10px 0px 10px 100px;"> Pengumuman : </div>
                <div style="margin: 10px 0px 10px 0px;" class="col-1">
                    <img src="{{ asset('images/icon/chevrons-left (1).svg') }}" id="arrow-left" alt=""
                        onclick="moveSlide(1)">
                </div>
                <div class="col-6">
                    <div style="margin: 10px 0px 10px 0px;" id="info-container">
                        <!-- Data dari database akan ditampilkan di sini -->
                    </div>

                </div>
                <div style="margin: 10px 0px 10px 0px;" class="col-1">
                    <img src="{{ asset('images/icon/chevrons-right (1).svg') }}" id="arrow-left" alt=""
                        onclick="moveSlide(-1)">
                </div>
            </div>
        </div>
    </div>


    <section id="" class="testimonials">
        <div class="container">
            {{-- <div class="section-title" data-aos="zoom-out">
                <h2><strong> Berita </strong>Terkini</h2>
            </div> --}}

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    @foreach ($beritas as $berita)
                        <div class="swiper-slide">
                            <div class="card ">
                                <a href="beritas/{{ $berita->slug }}"><img src="{{ asset($berita->url_foto) }}"
                                        class="card-img-top hover-effect-2 card-img-top" alt=""
                                        style="height: 200px;object-fit: none; border-radius: 0 0 100px 0; border-bottom: 5px solid #fbb717;"></a>

                                <div class="card-body">
                                    <h3 class="font-weight-bold text-4 mb-1"><a href="beritas/{{ $berita->slug }}"
                                            class="link-color-dark">{{ $berita->judul }}</a></h3>
                                    <span class="text-color-dark mb-3"><i class="far fa-clock text-color-primary"></i>
                                        {{ $berita->tanggal }} </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>


    <section id="testimonials" class="testimonials" style="background-color:rgba(145, 145, 133,0.2)">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2><strong> infrastruktur </strong> BBWS Serayu Opak</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    @foreach ($infrastrukturs as $infrastruktur)
                        <div class="swiper-slide">
                            <div class="card">
                                <a href=""><img src="{{ asset($infrastruktur->url_foto1) }}"
                                        class="card-img-top hover-effect-2" alt=""
                                        style="height: 200px;object-fit: none;"></a>

                                <div class="card-body">
                                    <h3 class="font-weight-bold text-4 mb-1"><a href=""
                                            class="link-color-dark">{{ $infrastruktur->nama }}</a></h3>
                                    <span class="text-color-dark mb-3"><i class="far fa-clock text-color-primary"></i>
                                        {{ $infrastruktur->tanggal }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">

            {{-- <div class="section-title" data-aos="zoom-out">
                <h2>Situs Terkait</h2>

            </div> --}}

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($logoTerkaits as $logoTerkait)
                        <div class="swiper-slide">
                            <div class="border:none">
                                <a href=""><img src="{{ asset($logoTerkait->url_logo) }}"
                                        class="card-img-top hover-effect-2 d-flex justify-content-center" alt=""
                                        style="height: 50px; width: auto;  "></a>
                            </div>
                            <div class="card-body">
                                <h3 class="font-weight-bold text-4 mb-1"><a href=""
                                        class="link-color-dark align-content-center"
                                        style="font-size: 14px; color: rgb(11,38,83)">{{ $logoTerkait->name }}</a>
                                </h3>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->


    <div class="col-8 " style="margin: 10px 0px 10px 0px; color:black;" id="info-container">
        <!-- Data dari database akan ditampilkan di sini -->
    </div>

    {{-- <script>
        const infoData = @json($infoData); // Mengambil data dari PHP ke JavaScript

        let currentIndex = 0;

        function displayInfo() {
            const infoContainer = document.getElementById('info-container');
            const info = infoData[currentIndex];
            // Membuat tautan dengan data dari database
            const infoLink = `<a href="${info.url_pengumuman}" style=" color:white;">${info.judul}</a>`;
            infoContainer.innerHTML = infoLink;
            currentIndex = (currentIndex + 1) % infoData.length;
        }

        // Tampilkan data pertama saat halaman dimuat
        displayInfo();

        // Mengganti data setiap beberapa detik
        setInterval(displayInfo, 4000); // Ubah angka ini sesuai dengan interval yang Anda inginkan (dalam milidetik).
    </script> --}}

    <script>
        const infoData = @json($infoData); // Mengambil data dari PHP ke JavaScript
        let currentIndex = 0;

        function displayInfo() {
            const infoContainer = document.getElementById('info-container');
            const info = infoData[currentIndex];
            // Membuat tautan dengan data dari database
            const infoLink = `<a href="${info.url_pengumuman}" style=" color:white;">${info.judul}</a>`;
            infoContainer.classList.add('info-transition'); // Menambahkan kelas CSS untuk memicu animasi
            setTimeout(() => {
                infoContainer.innerHTML = infoLink;
                infoContainer.classList.remove('info-transition'); // Menghapus kelas CSS untuk mengakhiri animasi
                currentIndex = (currentIndex + 1) % infoData.length;
            }, 500); // Waktu tunggu sebelum mengganti elemen (dalam milidetik)
        }

        // Tampilkan data pertama saat halaman dimuat
        displayInfo();

        // Mengganti data setiap beberapa detik
        const interval = setInterval(displayInfo,
            4000); // Ubah angka ini sesuai dengan interval yang Anda inginkan (dalam milidetik).

        // Fungsi untuk menggeser elemen
        function moveSlide(direction) {
            clearInterval(interval); // Hentikan interval saat tombol panah diklik
            currentIndex = (currentIndex + direction + infoData.length) % infoData.length;
            displayInfo(); // Tampilkan elemen baru
            interval = setInterval(displayInfo, 4000); // Mulai interval lagi setelah menggeser
        }
    </script>
@endsection
