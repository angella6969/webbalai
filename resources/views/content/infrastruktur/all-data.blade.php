@extends('layout.content.main')
@section('container')
    {{-- <section
    style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <div class="container"><br>
        <div class="row align-items-center ">
            <div class="col-md-8 text-left">
                <span class="tob-sub-title text-color-light d-block">Informasi</span>
                <h1 class="font-weight-bold text-color-light">Infrastruktur</h1>
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
    <x-h_content judul="Semua Infrastruktur" posisi1="Beranda" posisi2="Infrastruktur" link="/informasi-publik/infrastruktur" />
    {{-- End Header Content --}}

    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($infrastrukturs as $infrastrukturs)
                    <div class="col-lg-4 entries" style="margin-top:20px">
                        <article class="entry entry-single">
                            <a style="color: var(--bs-light-text)"
                                href="/balai/bbwsserayuopak/informasi-publik/infrastruktur/{{ $infrastrukturs->jenis }}/{{ $infrastrukturs->slug }}">
                                <div class="entry-img d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . substr($infrastrukturs->url_foto1, 6)) }}"
                                        alt="" class="img-fluid"
                                        style="height: 300px; width: auto; border-radius: 5px;">
                                </div>

                                <h1 class="entry-title">
                                    {{ $infrastrukturs->nama }}
                                </h1>
                            </a>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="">{{ $infrastrukturs->created_at }}</time></a></li>
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
