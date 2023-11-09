@extends('layout.content.main')
@section('container')
    <style>
        .image-container {
            white-space: nowrap;
            overflow-x: auto;
            object-fit: cover;
        }

        .button {
            display: inline-block;
        }

        .image-element.hidden {
            display: none;
        }

        .btn {
            margin: 5px;
            background-color: rgba(255, 201, 40, 0.8);

        }

        @media (max-width: 768px) {
            .btn {
                display: block;
                width: 100%;
            }
        }

        .btn:hover {
            background-color: rgba(53, 71, 1190.8);
            color: #fff;
        }

        .btn.active-button {
            background-color: rgba(53, 71, 1190.8);
            color: white;
        }

        .iframe-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%;
            /* 16:9 aspect ratio (h/w) */
        }

        .iframe-container iframe {

            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">LAYANAN</span>
                    <h1 class="font-weight-bold text-color-light">Prosedur Pelayanan</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="/">Beranda</a> / <a href=""
                                style="color: black" class="active">Layanan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-height-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">

                        <header class=" mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <h1 class=" mb-3" style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" role="heading"
                                aria-level="2" data-uw-rm-heading="level">Prosedur Pelayanan</h1>
                        </header>

                        <div class="image-container d-flex justify-content-center mb-3">
                            <button class="btn btn-light" onclick="toggleImage(0)">Prosedur</button>
                            <button class="btn btn-light" onclick="toggleImage(1)">Video Kalatirta</button>

                        </div>

                        <div class="image-container">
                            <div class="d-flex justify-content-center"><img data-index="0"
                                    class="image-element background-element "
                                    src="{{ asset('images\image\kalatirta\SOP Kalatirta.jpg') }}" alt=""></div>

                            <div class="iframe-container image-container">
                                <iframe class="image-element background-element hidden" data-index="1"
                                    src="https://www.youtube.com/embed/YSJTEl0VIcQ" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </article>
                </div>
    </section>

    <script>
        function toggleImage(index) {
            var images = document.querySelectorAll('.image-element');
            images.forEach(function(image) {
                var dataIndex = image.getAttribute('data-index');
                if (dataIndex == index) {
                    image.classList.remove('hidden');
                    localStorage.setItem('activeImageIndex', index);
                } else {
                    image.classList.add('hidden');
                }
            });

            // Mengubah warna tombol yang aktif
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(function(button, i) {
                if (i == index) {
                    button.classList.add('active-button');
                } else {
                    button.classList.remove('active-button');
                }
            });
        }

        var storedIndex = localStorage.getItem('activeImageIndex');
        if (storedIndex !== null) {
            toggleImage(parseInt(storedIndex));
        }
    </script>
@endsection
