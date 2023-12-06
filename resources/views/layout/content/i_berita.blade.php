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
