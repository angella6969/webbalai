@extends('layout.content.main')
@section('container')
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Media</span>
                    <h1 class="font-weight-bold text-color-light">Video</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a style="color: black" href="/">Beranda</a> / <a href="" style="color: black"
                                class="active"><strong>Galeri</strong></a></li>
                        {{-- <li class="active"> Profil</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($fotos as $foto)
                    <div class="col-lg-4 entries" style="margin-top:20px">
                        <a href="foto/{{ $foto->slug }}" style="color: var(--bg-bs-text)">
                            <article class="entry">
                                <div class="entry-img d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . substr($foto->url_foto1, 7)) }}" alt=""
                                        style="height: 300px; border-radius: 10px" class="card-img-top img-fluid">
                                </div>
                                <h6> <i class="bi bi-clock"></i>
                                    {{ Carbon\Carbon::createFromTimeString($foto->created_at)->format('d F Y') }}</h6>
                                {{-- <h3>{{ $foto->nama }}</h3> --}}
                                <h2 class="entry-title">
                                    {{ $foto->nama }}
                                </h2>
                            </article>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
