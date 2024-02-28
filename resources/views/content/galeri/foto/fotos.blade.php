@extends('layout.content.main')
@section('container')
    <x-h_content judul="Galery Foto" posisi1="Media" posisi2="Beranda" link="/" />
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($fotos as $foto)
                    <div class="col-lg-4 entries" style="margin-top:20px">
<<<<<<< HEAD
                        <a href="media/galeri/foto/{{ $foto->slug }}" style="color: var(--bg-bs-text)">
=======
                        <a href="foto/{{ $foto->slug }}" style="color: var(--bg-bs-text)">
>>>>>>> parent of 71e58e0 (awd awdawdwd1)
                            <article class="entry">
                                <div class="entry-img d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . substr($foto->url_foto1, 7)) }}" alt=""
                                        style="height: 300px; border-radius: 10px" class="card-img-top img-fluid">
                                </div>
                                <h6> <i class="bi bi-clock"></i>
                                    {{ Carbon\Carbon::createFromTimeString($foto->created_at)->format('d F Y') }}</h6>
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
