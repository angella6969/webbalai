@extends('layout.content.main')
@section('container')
    {{-- Header Content --}}
    <x-h_content judul="Berita Terbaru" posisi1="Beranda" posisi2="Berita" link="" />
    {{-- End Header Content --}}

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                {{-- Main Content --}}
                <div class="col-lg-8 entries">
                    @php
                        $today = now()->toDateString();
                    @endphp

                    @foreach ($beritas as $berita)
                        @if ($berita->created_at->toDateString() != $today)
                            <article class="entry">
                                <div class="entry-img d-flex justify-content-center">
                                    <img src="{{ asset('storage' . substr($berita->url_foto, 6)) }}" alt=""
                                        style="height: 300px; border-radius: 10px" class="card-img-top img-fluid">
                                </div>
                                <h6> <i class="bi bi-clock"></i>
                                    {{ Carbon\Carbon::createFromTimeString($berita->created_at)->format('d F Y') }}</h6>
                                <h2 class="entry-title">
                                    <a href="beritas/{{ $berita->slug }}"
                                        style="color: var(--bg-bs-text)">{{ $berita->judul }}</a>
                                </h2>
                                <div class="entry-content">
                                    <p>
                                        <a href="beritas/{{ $berita->slug }}" style="color: var(--bg-bs-text)">
                                            {{ Str::limit(strip_tags($berita->body), 300) }}
                                        </a>
                                    </p>
                                </div>
                            </article>
                        @endif
                    @endforeach
                    <div class="d-flex justify-content-center"> {{ $beritas->links() }}</div>
                </div>
                {{-- End Main Content --}}

                {{-- Sidebar Content Berita --}}
                @include('layout.content.sidebar_content')
                {{-- End Sidebar Content Berita --}}

            </div>
        </div>
    </section>
@endsection
