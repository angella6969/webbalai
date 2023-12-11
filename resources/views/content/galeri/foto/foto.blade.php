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
                {{-- @foreach ($foto as $item) --}}
                <div class="entry-img d-flex justify-content-center">
                    <img src="{{ asset('storage/' . substr($foto->url_foto1, 7)) }}" alt="" class="img-fluid"
                        style=" width: 150vw; ">
                </div>
                <div>
                    <li>Foto : {{ $foto->nama }}</li>
                    <x-garis />
                </div>
                @if (!is_null($foto->url_foto1))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto1, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto1, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto; ">
                    </a>
                @endif

                @if (!is_null($foto->url_foto2))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto2, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto2, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto;">
                    </a>
                @endif

                @if (!is_null($foto->url_foto3))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto3, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto3, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto;">
                    </a>
                @endif
                @if (!is_null($foto->url_foto4))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto4, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto4, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto;">
                    </a>
                @endif

                @if (!is_null($foto->url_foto5))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto5, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto5, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto;">
                    </a>
                @endif
                @if (!is_null($foto->url_foto6))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto6, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto6, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto;">
                    </a>
                @endif
                @if (!is_null($foto->url_foto7))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto7, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto7, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto;">
                    </a>
                @endif
                @if (!is_null($foto->url_foto8))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto8, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto8, 7)) }}" alt="" class="img-fluid"
                            style="height: 150px; width: auto;">
                    </a>
                @endif
                @if (!is_null($foto->url_foto9))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto9, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto9, 7)) }}" alt=""
                            class="img-fluid" style="height: 150px; width: auto;">
                    </a>
                @endif
                @if (!is_null($foto->url_foto9))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto9, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto9, 7)) }}" alt=""
                            class="img-fluid" style="height: 150px; width: auto;">
                    </a>
                @endif
                @if (!is_null($foto->url_foto10))
                    <a style="padding:5px" href="{{ asset('storage/' . substr($foto->url_foto10, 7)) }}"
                        data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="{{ asset('storage/' . substr($foto->url_foto10, 7)) }}" alt=""
                            class="img-fluid" style="height: 150px; width: auto;">
                    </a>
                @endif
                {{-- @endforeach --}}


            </div>
        </div>
    </section>
@endsection
