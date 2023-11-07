@extends('layout.content.main')
@section('container')
    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            {{-- @foreach ($beritas as $berita) --}}
                <div class="swiper-slide">
                    <div class="card ">
                        {{-- <a href="beritas/{{ $berita->slug }}"><img
                                src="{{ asset('storage/' . substr($berita->url_foto, 6)) }}"
                                class="card-img-top hover-effect-2 card-img-top" alt=""
                                style="height: 200px;object-fit: none; border-radius: 0 0 100px 0; border-bottom: 5px solid #fbb717;"></a> --}}
                        <a href="3"><img
                                src="{{ asset('images\image\Gambar1.jpg') }}"
                                class="card-img-top hover-effect-2 card-img-top" alt=""
                                style="height: 200px;object-fit: none; border-radius: 0 0 100px 0; border-bottom: 5px solid #fbb717;"></a>

                        <div class="card-body">
                            {{-- <h3 class="font-weight-bold text-4 mb-1"><a href="#"
                                    class="link-color-dark">{{ $berita->judul }}</a></h3> --}}
                            <h3 class="font-weight-bold text-4 mb-1"><a href="#"
                                    class="link-color-dark">Bendungan 1</a></h3>
                            <span class="text-color-dark mb-3"><i class="far fa-clock text-color-primary"></i>
                                tgl 12-12-12 </span>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
        {{-- <div class="swiper-pagination"></div> --}}

        {{-- <div class="col d-flex justify-content-center mt-3">
            <a href="/beritas" class="btn btn-rounded btn-4 text-0 font-weight-semibold"
                style="background-color: rgb(3,15,107); color:#fff">Indeks
                Berita</a>
        </div> --}}
    </div>
@endsection
