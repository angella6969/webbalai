@extends('layout.content.main')
@section('container')
    {{-- Header Content --}}
    <x-h_content judul="Embung" posisi1="Beranda" posisi2="Infrastruktur" link="/informasi-publik/infrastruktur" />
    {{-- End Header Content --}}
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($embungs as $embung)
                    <div class="col-lg-4 entries" style="margin-top:20px">
                        <article class="entry entry-single">
                            <div class="entry-img d-flex justify-content-center">
                                <a href="informasi-publik/infrastruktur/embungs/{{ $embung->slug }}"> <img
                                        src="{{ asset('storage/' . substr($embung->url_foto1, 6)) }}" alt=""
                                        class="img-fluid" style="border-radius: 5px; height: 310px; width: auto;"></a>
                            </div>


                            <h1 class="entry-title">
                                {{ $embung->nama }}
                            </h1>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="">{{ $embung->created_at }}</time></a></li>
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
