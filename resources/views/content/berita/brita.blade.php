@extends('layout.content.main')
@section('container')
    <!-- ======= Blog Single Section ======= -->
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries" style="margin-top:20px">

                    <article class="entry entry-single">

                        <div class="entry-img d-flex justify-content-center">
                            <img src="{{ asset('storage/' . substr($berita->url_foto,6)) }}" alt="" class="img-fluid"
                                style="border-radius: 5px">
                        </div>

                        <h2 class="entry-title">
                            <p>{{ $berita->judul }}</p>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="">{{ $berita->created_at }}</time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!! $berita->body !!}
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Berita Terbaru</h3>
                        @foreach ($beritas as $berita)
                            <div class="sidebar-item recent-posts" style="overflow: auto;">
                                <div class="post-item clearfix">
                                    <a href="{{ $berita->slug }}"><img
                                            style=" border-radius: 15px 2px 15px 2px; border-bottom:3px solid #fbb717 !important;"
                                            src="{{ asset('storage/' . substr($berita->url_foto,6)) }}" alt=""></a>
                                    <h4><a href="{{ $berita->slug }}">{{ $berita->judul }}</a>
                                    </h4>
                                    <time datetime="2020-01-01"><i class="bi bi-clock"></i> {{ $berita->created_at }}</time>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

