@extends('layout.content.main')
@section('container')
    {{-- ============================ Foto Beranda ============================ --}}
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="4000" class="carousel carousel-fade" data-bs-ride="carousel">


            @foreach ($images as $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    <img src="{{ asset('storage' . substr($image->image, 6)) }}"
                        style="width: 100%; height: 100%; object-fit: contain;" alt="Slide">
                    <div class="p-3 py-2 text-white "
                        style="z-index: 999; background-color: rgba(59, 54, 54, 0.9); position: absolute; top:90%; left: 35%; right: 35%; border-radius: 30px;">
                        <h6 class="d-flex justify-content-center">{{ $image->nama }}</h6>
                    </div>
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

        {{-- <div class="col-lg-12" style="height: 10px; color:#fff; background: rgb(255, 255, 255); ">
            <div clas="col-xl-4" style="margin:0px 0px 20px 100px; "></div>
        </div> --}}


    </section>
    {{-- ============================ End Foto Beranda ============================ --}}


{{-- ============================ Pengumuman ============================ --}}

<<<<<<< HEAD
    <section style="padding-top: 0px">
        <div class="col-lg-12" style="height: 70px; color: #fff; background: var(--main-kuning);">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 ahidden-slider slider-item"> Pengumuman : </div>
                    <div class="col-md-8 slider">
                        @foreach ($infoData as $data)
                            <div class="slider-item"><a style="color: var(--bs-light-text)"
                                    href="pengumumans">{{ $data->judul }}</a></div>
                        @endforeach
                    </div>
=======
<section style="padding-top: 0px">
    <div class="col-lg-12" style="height: 70px; color: #fff; background: var(--main-kuning);">
        <div class="container">
            <div class="row">
                <div class="col-md-2 ahidden-slider slider-item"> Pengumuman : </div>
                <div class="col-md-8 slider">
                    @foreach ($infoData as $data)
                    <div class="slider-item"><a style="color: var(--bs-light-text)" href="/pengumumans">{{ $data->judul
                            }}</a></div>
                    @endforeach
>>>>>>> parent of 71e58e0 (awd awdawdwd1)
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================ End Pengumuman ============================ --}}


{{-- ============================ Berita ============================ --}}
@include('layout.content.i_berita')
{{-- ============================ End Berita ============================ --}}


{{-- ============================ Infrastruktur ============================ --}}
@include('layout.content.i_infrastruktur')
{{-- ============================ End Infrastruktur ============================ --}}


    {{-- ============================ Logo Terkait ============================ --}}
    <section id="" class="testimonials">
        <div class="multiple-items1 card-img-top1" id="multiple-items1" data-aos="fade-up" data-aos-delay="100">
            @foreach ($logoTerkaits as $logoTerkait)
                <div class="swiper-slide1">
                    <div class="border:none">
                        <a href="{{ $logoTerkait->url_situs }}" target="_blank"><img
                                src="{{ asset('storage' . substr($logoTerkait->image, 6)) }}"
                                class="card-img-top1  d-flex justify-content-center" alt=""></a>
                    </div>
                    <div class="card-body">
                        <h3 class="font-weight-bold text-4 mb-1"><a href=""
                                class="link-color-dark align-content-center"
                                style="font-size: 14px; color: rgb(11,38,83)">{{ $logoTerkait->nama }}</a>
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- ============================ End Logo Terkait ============================ --}}
@endsection