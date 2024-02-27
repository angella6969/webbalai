@extends('layout.content.main')
@section('container')
    {{-- Header Content --}}
    <x-h_content judul="Bendung" posisi1="Beranda" posisi2="Infrastruktur" link="/informasi-publik/infrastruktur" />
    {{-- End Header Content --}}

    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($bendungs as $bendung)
                    <div class="col-lg-4 entries" style="margin-top:20px">
                        <article class="entry entry-single">
                            <a href="informasi-publik/infrastruktur/bendungs/{{ $bendung->slug }}">
                                <div class="entry-img d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . substr($bendung->url_foto1, 6)) }}" alt=""
                                        class="img-fluid" style="border-radius: 5px; height: 310px; width: auto;">
                                </div>
                            </a>
                            <h1 class="entry-title">
                                {{ $bendung->nama }}
                            </h1>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="">{{ $bendung->created_at }}</time></a></li>
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
