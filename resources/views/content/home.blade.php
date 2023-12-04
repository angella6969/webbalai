@extends('layout.content.main')
@section('container')
    <style>
        .info-transition {
            transition: opacity 0.5s;
            opacity: 0;
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

        .card-img-top1 {
            max-width: 80%;
            height: auto;
            margin: 0 auto;
        }

        .multiple-items1 .swiper-slide1 img {
            height: 100px;
            width: auto;
            display: block;
            margin: 0 auto;
        }

        .slider-item {
            text-align: center;
            padding: 20px;
        }

        @media (max-width:762px) {
            .ahidden-slider {
                display: none;
            }
        }
    </style>

    {{-- ============================ Foto Beranda ============================ --}}
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="4000" class="carousel carousel-fade" data-bs-ride="carousel">


            @foreach ($images as $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . substr($image->image, 6)) }}"
                        style="width: 100vw; height: 100vh; object-fit: cover;" alt="Slide">
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
    {{-- ============================ End Foto Beranda ============================ --}}


    {{-- ============================ Pengumuman ============================ --}}

    <section style="padding-top: 0px">
        <div class="col-lg-12" style="height: 70px; color: #fff; background: var(--main-kuning);">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 ahidden-slider slider-item" > Pengumuman : </div>
                    <div class="col-md-8 slider">
                        @foreach ($infoData as $data)
                            <div class="slider-item"><a style="color: var(--bs-light-text)"
                                    href="/pengumumans">{{ $data->judul }}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================ End Pengumuman ============================ --}}


    {{-- ============================ Berita ============================ --}}
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
                                <a href="beritas/{{ $berita->slug }}"><img
                                        src="{{ asset('storage/' . substr($berita->url_foto, 6)) }}"
                                        class="card-img-top hover-effect-2 card-img-top img-fluid" alt=""
                                        style="height: 200px;  border-radius: 0 0 100px 0; border-bottom: 5px solid #fbb717;"></a>

                                <div class="card-body">
                                    <h6 class="font-weight-bold text-4 mb-1"><a href="beritas/{{ $berita->slug }}"
                                            style="color:var(--bs-bg-body)"><strong>{{ $berita->judul }}</strong></a></h6>
                                    <span style="font-size: 12px" class="text-color-dark mb-3"><i class="bi bi-clock"></i>
                                        {{ Carbon\Carbon::createFromTimeString($berita->created_at)->format('d F Y') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="swiper-pagination"></div> --}}

                <div class="col d-flex justify-content-center mt-3">
                    <a href="/beritas" class="btn btn-rounded btn-4 text-0 font-weight-semibold"
                        style="background-color: rgb(3,15,107); color:#fff">Indeks
                        Berita</a>
                </div>
            </div>
        </div>
    </section>
    {{-- ============================ End Berita ============================ --}}


    {{-- ============================ Infrastruktur ============================ --}}
    <section id="" class="testimonials" style="background-color:rgba(145, 145, 133,0.2)">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2><strong> infrastruktur </strong> BBWS Serayu Opak</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    @foreach ($infrastrukturs as $infrastruktur)
                        <div class="swiper-slide">
                            <div class="card">
                                <a
                                    href="/informasi-publik/infrastruktur/{{ $infrastruktur->jenis }}/{{ $infrastruktur->slug }}"><img
                                        src="{{ asset('storage/' . substr($infrastruktur->url_foto1, 6)) }}"
                                        class="card-img-top hover-effect-2" alt="" style="height: 200px;"></a>

                                <div class="card-body">
                                    <h5 class="d-flex justify-content-center text-4 mb-1"><a href=""
                                            style="color: black; font-size: 14px;"
                                            class="link-color-dark"><strong>{{ $infrastruktur->nama }}</strong></a>
                                    </h5>
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
    {{-- ============================ End Infrastruktur ============================ --}}


    {{-- ============================ Logo Terkait ============================ --}}
    <section id="" class="testimonials">
        {{-- <div class=""> --}}

        {{-- <div class="section-title" data-aos="zoom-out">
            <h2>Situs Terkait</h2>

        </div> --}}

        <div class="multiple-items1 card-img-top1" id="multiple-items1" data-aos="fade-up" data-aos-delay="100">
            @foreach ($logoTerkaits as $logoTerkait)
                <div class="swiper-slide1">
                    <div class="border:none">
                        <a href="{{ $logoTerkait->url_situs }}" target="_blank"><img
                                src="{{ asset('storage/' . substr($logoTerkait->image, 6)) }}"
                                class="card-img-top1  d-flex justify-content-center" alt=""></a>
                    </div>
                    <div class="card-body">
                        <h3 class="font-weight-bold text-4 mb-1"><a href=""
                                class="link-color-dark align-content-center"
                                style="font-size: 14px; color: rgb(11,38,83)">{{ $logoTerkait->name }}</a>
                        </h3>
                    </div>
                </div>
            @endforeach
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </section>




    {{-- ============================ Logo Terkait ============================ --}}




    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- ============================ JS Logo Terkait ============================ --}}


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            $('.multiple-items1').slick({
                slidesToShow: 7,
                slidesToScroll: 1,
                autoplay: true,
                arrows: true,
                infinite: true,
                autoplaySpeed: 1000,
                responsive: [{
                        breakpoint: 1400,
                        settings: {
                            slidesToShow: 6,
                        }
                    },
                    {
                        breakpoint: 1300,
                        settings: {
                            slidesToShow: 5,
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    </script>

    {{-- ============================ End JS Logo Terkait ============================ --}}

    {{-- <script>
        const infoData = @json($infoData);
        let currentIndex = 0;

        function displayInfo() {
            const infoContainer = document.getElementById('info-container');
            const info = infoData[currentIndex];
            const infoLink = `<a href="${'storage/'+info.url_pengumuman.substr(7)}" style="color:white;">${info.judul}</a>`;
            infoContainer.classList.add('info-transition');
            setTimeout(() => {
                infoContainer.innerHTML = infoLink;
                infoContainer.classList.remove('info-transition');
                currentIndex = (currentIndex + 1) % infoData.length;
            }, 500);
        }

        displayInfo();

        const interval = setInterval(displayInfo,
            4000);

        function moveSlide(direction) {
            clearInterval(interval);
            currentIndex = (currentIndex + direction + infoData.length) % infoData.length;
            displayInfo();
            interval = setInterval(displayInfo, 4000);
        }
    </script> --}}
@endsection
