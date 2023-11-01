<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Balai Besar Wilayah Sungai Serayu Opak - DIrektorat Jendral Sumber Daya Air</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="shortcut icon" type="image/png" href="{{ asset('src') }}/assets/images/logos/favicon-16x16.png" />

    @include('layout.content.link')

</head>

<body class="main-content">

    @include('layout.content.header')

    {{-- <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel carousel-fade" data-bs-ride="carousel">

            <div class="carousel-item active">
                <img src="images\image\Gambar1.jpg" style="width: 100vw; height: 100vh; object-fit: cover;"
                    alt="Slide 1">
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="images\image\042117600_1638344185-photo-1507525428034-b723cf961d3e.jpg"
                    style="width: 100vw; height: 100vh; object-fit: cover;" alt="Slide 1">
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="images\image\dance_of_lights_by_ellysiumn_ddanutv-350t.jpg"
                    style="width: 100vw; height: 100vh; object-fit: cover;" alt="Slide 1">
            </div>

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
        </svg>

        <div class="col-lg-12" style="height: 10px; color:#fff; background: rgb(255, 255, 255); ">
            <div clas="col-xl-4" style="margin:0px 0px 20px 100px; "> </div>

        </div>

    </section><!-- End Hero -->

    <div class="col-lg-12" style="height: 50px; color:#fff; background: rgb(232,170,28); ">
        <div class="row">
            <div clas="col-xl-4" style="margin:0px 0px 20px 100px; "> Pengumuman : info </div>
            <div clas="col-xl-8"> info </div>
        </div>

    </div> --}}

    <main id="main">

        @yield('container')

    </main>
    <!-- End #main -->

    @include('layout.content.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layout.content.script')

</body>

</html>
