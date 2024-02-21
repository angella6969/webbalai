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
                            <a style="color:var(--bs-dark-text)"
                                href="/balai/bbwsserayuopak/informasi-publik/infrastruktur/{{ $infrastruktur->jenis }}/{{ $infrastruktur->slug }}"><img
                                    src="{{ asset('storage' . substr($infrastruktur->url_foto1, 6)) }}"
                                    class="card-img-top hover-effect-2" alt="" style="height: 200px; ">

                                <div class="card-body">
                                    <h5 class="d-flex justify-content-center text-4 mb-1">
                                        <strong>{{ $infrastruktur->nama }}</strong>
                                    </h5>
                                    <span class="text-color-dark mb-3"><i class="far fa-clock text-color-primary"></i>
                                        {{ $infrastruktur->tanggal }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>