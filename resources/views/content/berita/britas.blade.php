@extends('layout.content.main')
@section('container')
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Berita Terbaru</h2>

                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li>Berita</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @php
                        $today = now()->toDateString(); // Mendapatkan tanggal hari ini dalam format Y-m-d
                    @endphp

                    @foreach ($beritas as $berita)
                        @if ($berita->created_at->toDateString() != $today)
                            <article class="entry">
                                <div class="entry-img d-flex justify-content-center">
                                    {{-- public\storage\images\8Dt0RmXD49WMzdO5DM7iaQBeqoUHD4YYYuHxcEWP.png --}}
                                    <img src="{{ asset('storage/' . substr($berita->url_foto,6)) }}" alt=""
                                        style="height: 300px; border-radius: 10px" class="card-img-top hover-effect-2">
                                </div>
                                <label for="">
                                    <h6> <i class="bi bi-clock"></i> {{ $berita->created_at }}</h6>
                                </label>
                                <h2 class="entry-title">
                                    <a href="beritas/{{ $berita->slug }}">{{ $berita->judul }}</a>
                                </h2>
                                @php
                                    $body = $berita->body;
                                    $pattern = '/^(.*?[.!?])\s+(.*?[.!?])/';
                                    if (preg_match($pattern, $body, $matches)) {
                                        $duaKalimatPertama = $matches[1] . ' ' . $matches[2];
                                    } else {
                                        $duaKalimatPertama = $body;
                                    }
                                @endphp
                                <div class="entry-content">
                                    <p>
                                        <a href="beritas/{{ $berita->slug }}" style="color: #343434">
                                            {{ $duaKalimatPertama }}</a>
                                    </p>
                                    {{-- <div class="read-more">
                                        <a href="beritas/{{ $berita->slug }}">Selengkapnya</a>
                                    </div> --}}
                                </div>
                            </article>
                        @endif
                    @endforeach
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Berita Terbaru</h3>
                        @foreach ($beritas as $berita)
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <a href="beritas/{{ $berita->slug }}"><img
                                            style="border-radius: 15px 2px 15px 2px; border-bottom:3px solid #fbb717 !important;"
                                            src="{{ asset('storage/' . substr($berita->url_foto,6)) }}" alt=""></a>
                                    <h4><a href="beritas/{{ $berita->slug }}">{{ $berita->judul }}</a>
                                    </h4>
                                    <time datetime="2020-01-01"><i class="bi bi-clock"></i>
                                        {{ $berita->created_at }}</time>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
