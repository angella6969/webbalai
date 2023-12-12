@extends('layout.content.main')
@section('container')
    <style>
        /* Customize the color of Slick arrows */
        .slick-prev,
        .slick-next {
            background-color: var(--main-kuning) !important;
            border-radius: 15px
                /* Change this to the desired color */
        }
    </style>
    <x-h_content judul="Galery Foto" posisi1="Media" posisi2="Beranda" link="/" />

    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="slider-for">
                @for ($i = 1; $i <= 10; $i++)
                    @if (!is_null($foto["url_foto{$i}"]))
                        <div class="slider-item d-flex justify-content-center">
                            <img src="{{ asset('storage/' . substr($foto["url_foto{$i}"], 7)) }}" alt=""
                                class="img-fluid" style="height: 400px; width: auto;">
                        </div>
                    @endif
                @endfor
            </div>

            <div class="slider-nav mt-3">
                @for ($i = 1; $i <= 10; $i++)
                    @if (!is_null($foto["url_foto{$i}"]))
                        <div class="slider-item">
                            <img src="{{ asset('storage/' . substr($foto["url_foto{$i}"], 7)) }}" alt=""
                                class="img-fluid" style="height: 150px; width: auto;">
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                arrows: true,
                infinite: true,
                autoplaySpeed: 1000,
                fade: true,
                asNavFor: '.slider-nav',
                prevArrows: '<button type="button" class="slick-prev">Previous</button>',
                nextArrows: '<button type="button" class="slick-next">Next</button>'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: true,
                arrows: true,
                centerMode: true,
                focusOnSelect: true,
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
    </script>
@endsection
