@extends('layout.content.main')
@section('container')
    <style>
        .border-radius {
            border-radius: 10px;
            background-color: rgb(3, 15, 107);
        }
    </style>
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Berita Terbaru</h2>

                <ol>
                    <li><a style="color: black" href="/">Beranda</a></li>
                    <li style="color: black">Berita</li>
                </ol>
            </div>

        </div>
    </section>
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries" style="margin-top:20px">
                    {{-- <h1>Infrastruktur</h1>
                    @foreach ($embungs as $embung)
                        <article class="entry entry-single">
                            <div>
                                <p>{{ $embung->nama }}</p>
                            </div>
                        </article>
                    @endforeach
                    <h1>Media Informasi</h1>
                    @foreach ($infografis as $infografis)
                        <article class="entry entry-single">
                            <div>
                                <p>{{ $infografis->nama }}</p>
                            </div>
                        </article>
                    @endforeach --}}

                </div>
                {{-- <div class="col-lg-4">
                    <div class="sidebar"> --}}
                {{-- <h3 class="sidebar-title">Berita Terbaru</h3> --}}
                {{-- @foreach ($beritas as $berita)
                            <div class="sidebar-item recent-posts" style="overflow: auto;">
                                <div class="post-item clearfix">
                                    <a href="{{ $berita->slug }}"><img
                                            style=" border-radius: 15px 2px 15px 2px; border-bottom:3px solid #fbb717 !important;"
                                            src="{{ asset('storage/' . substr($berita->url_foto, 6)) }}" alt=""></a>
                                    <h4><a href="{{ $berita->slug }}">{{ $berita->judul }}</a>
                                    </h4>
                                    <time datetime="2020-01-01"><i class="bi bi-clock"></i> {{ $berita->created_at }}</time>
                                </div>
                            </div>
                        @endforeach --}}
                {{-- </div> --}}
                {{-- </div> --}}


                <div class="row">
                    <div id="section1" class="text-light p-3  col-8 col-lg-8 border-radius">
                        <h4 class="text-light m-0 text-5 font-weight-light"><i class="far fa-newspaper"></i> Infrastruktur
                        </h4>
                    </div>
                    <div class="col-8 col-lg-8 mt-3">
                        @foreach ($infrastrukturs as $infrastruktur)
                            <article class="entry entry-single">
                                <div>
                                    <p>{{ $infrastruktur->nama }}</p>
                                    <p>{{ $infrastruktur->created_at }}</p>
                                </div>
                            </article>
                        @endforeach

                    </div>
                    <hr>
                    <div id="section2" class="text-light p-3 border-radius">
                        <h4 class="text-light m-0 text-5 font-weight-light"><i class="fas fa-images"></i> Brita</h4>
                    </div>
                    <div class="col-12 col-lg-12 mt-3">
                        @foreach ($berita as $berit)
                            <article class="entry entry-single">
                                <div class="sidebar-item recent-posts" style="overflow: auto;">
                                    <div class="post-item clearfix">
                                        <div>
                                            <a style="color: black" href=""><img src="{{ asset('images\icon\file-text (2).svg') }}"
                                                    alt="">
                                                {{ $berit->judul }}
                                            </a>
                                            <p><i class="bi bi-clock"></i>
                                                {{ $berit->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    </div>
                    <hr>
                    <div id="section3" class="text-light p-3 border-radius">
                        <h4 class="text-light m-0 text-5 font-weight-light"><i class="fas fa-photo-video"></i> Video </h4>
                    </div>
                    <div class="col-12 col-lg-12">
                        @foreach ($galeris as $galeri)
                            <article class="entry entry-single">
                                <div class="sidebar-item recent-posts" style="overflow: auto;">
                                    <div class="post-item clearfix">
                                        <div>
                                            <a style="color: black" href=""><img src="{{ asset('images\icon\youtube (1).svg') }}"
                                                    alt="">
                                                {{ $galeri->nama }}
                                            </a>
                                            <p><i class="bi bi-clock"></i>
                                                {{ $galeri->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    </div>
                    <hr>
                    {{-- <div id="section4" class="text-light p-3 border-radius">
                        <h4 class="text-light m-0 text-5 font-weight-light"><i class="fas fa-file-alt"></i> Publikasi </h4>
                    </div>
                    <div class="col-12 col-lg-12"> </div>
                    <hr>
                    <div id="section5" class="text-light p-3 border-radius">
                        <h4 class="text-light m-0 text-5 font-weight-light"><i class="fas fa-cubes"></i> Aplikasi </h4>
                    </div>
                    <div class="col-lg-12"> </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
