@extends('layout.content.main')
@section('container')
    {{-- Header Content --}}
    <x-h_content judul="Berita Terbaru" posisi1="Beranda" posisi2="Berita" />
    {{-- End Header Content --}}

    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries" style="margin-top:20px">

                    <article class="entry entry-single">

                        <div class="entry-img d-flex justify-content-center">
                            <img src="{{ asset('storage/' . substr($berita->url_foto, 6)) }}" alt=""
                                class="img-fluid" style="border-radius: 5px">
                        </div>

                        <h2 class="entry-title">
                            <p>{{ $berita->judul }}</p>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="">{{ $berita->created_at }}</time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!! $berita->body !!}
                            </p>
                        </div>
                    </article>
                </div>
                {{-- Sidebar Content Berita --}}
                @include('layout.content.sidebar_content')
                {{-- End Sidebar Content Berita --}}
            </div>
        </div>
    </section>
@endsection
