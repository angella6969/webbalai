@extends('layout.content.main')
@section('container')
    <!-- ======= Blog Single Section ======= -->
    {{-- <section class="" data-plugin-image-background="" data-plugin-options=""
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Infrastruktur</span>
                    <h1 class="font-weight-bold text-color-light">Bendungan</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a style="color: black" href="/">Beranda</a> / <a href="" style="color: black"
                                class="active"><strong>Infrastruktur</strong></a></li>
                        <li class="active"> Profil</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Header Content --}}
    <x-h_content judul="Bendungan" posisi1="Beranda" posisi2="Infrastruktur" link="/balai/bbwsserayuopak/informasi-publik/infrastruktur" />
    {{-- End Header Content --}}


    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                @foreach ($bendungans as $bendungan)
                    <div class="col-lg-4 entries" style="margin-top:20px">
                        <article class="entry entry-single">
                            <div class="entry-img d-flex justify-content-center">
                                <a
                                    href="/balai/bbwsserayuopak/informasi-publik/infrastruktur/bendungans/{{ $bendungan->slug }}">
                                    <img src="{{ asset('storage/' . substr($bendungan->url_foto1, 6)) }}" alt=""
                                        class="img-fluid" style="border-radius: 5px; height: 310px; width: auto;"></a>
                            </div>

                            <h1 class="entry-title">
                                {{ $bendungan->nama }}
                            </h1>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                        {{ $bendungan->created_at }}</li>
                                </ul>
                            </div>
                            <div class="entry-content "> </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
