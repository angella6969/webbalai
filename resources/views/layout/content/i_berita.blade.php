<section id="" class="testimonials">
    <div class="multiple-items1 card-img-top1" id="multiple-items1" data-aos="fade-up" data-aos-delay="100">
        @foreach ($beritas as $berita)
            <div class="swiper-slide">
                <div class="card " style="border: 10px">
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
</section>

<script type="text/javascript">
    // ============================ JS Logo Terkait ============================ \\
    document.addEventListener('DOMContentLoaded', function() {
        $('.multiple-items1').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            infinite: true,
            autoplaySpeed: 1000,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
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
                        slidesToShow: 2,
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


    // ============================ JS Pengumuman ============================ \\
    $(document).ready(function() {
        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
