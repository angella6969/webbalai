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
            <div id="section1" class="text-light p-3  col-8 col-lg-8 border-radius">
                <h4 class="text-light m-0 text-5 font-weight-light d-flex justify-content-center"><i
                        class="far fa-newspaper"></i> Infrastruktur
                </h4>
            </div>
            <div class="col-8 col-lg-8 mt-3">
                @foreach ($infrastrukturs as $infrastruktur)
                <article class="entry entry-single">
                    <div class="sidebar-item recent-posts" style="overflow: auto;">
                        <div class="post-item clearfix">
                            <div>
                                <a style="background-color: var(--bg-bs-body); color: var(--bg-bs-text)"
                                    href="/informasi-publik/infrastruktur/{{ $infrastruktur->jenis }}/{{ $infrastruktur->slug }}"><img
                                        style="width: 40px" src="{{ asset('images\icon\snowplow.png') }}" alt="">
                                    {{ $infrastruktur->nama }}
                                </a>
                                <p><a href="/informasi-publik/infrastruktur/{{ $infrastruktur->jenis }}">
                                        @if ($infrastruktur->jenis === 'bendungans')
                                        <strong>Bendungan</strong>
                                        @elseif($infrastruktur->jenis === 'bendungs')
                                        <strong>Bendung</strong>
                                        @else
                                        <strong>Embung</strong>
                                        @endif

                                    </a>
                                    | <i class="bi bi-clock"></i>
                                    {{ \Carbon\Carbon::parse($infrastruktur->created_at)->format('d-M-y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <div id="section2" class="text-light col-8 col-lg-8 p-3 border-radius">
                <a href="/beritas">
                    <h4 class="text-light m-0 text-5 font-weight-light d-flex justify-content-center"><i
                            class="fas fa-images"></i> Brita</h4>
                </a>
            </div>
            <div class="col-8 col-lg-8 mt-3">
                @foreach ($berita as $berit)
                <article class="entry entry-single">
                    <div class="sidebar-item recent-posts" style="overflow: auto;">
                        <div class="post-item clearfix">
                            <div>
                                <a style="background-color: var(--bg-bs-body); color: var(--bg-bs-text)"
                                    href="/beritas/{{ $berit->slug }}"><img style="width: 40px"
                                        src="{{ asset('images\icon\form.png') }}" alt="">
                                    {{ $berit->judul }}
                                </a>
                                <p><strong>Berita</strong> | <i class="bi bi-clock"></i>
                                    {{ \Carbon\Carbon::parse($berit->created_at)->format('d-M-y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <div id="section2" class="text-light col-8 col-lg-8 p-3 border-radius">
                <a href="/media/media-informasi">
                    <h4 class="text-light m-0 text-5 font-weight-light d-flex justify-content-center"><i
                            class="fas fa-images"></i> Media</h4>
                </a>
            </div>
            <div class="col-8 col-lg-8 mt-3">
                @foreach ($infografis as $infografi)
                <article class="entry entry-single">
                    <div class="sidebar-item recent-posts" style="overflow: auto;">
                        <div class="post-item clearfix">
                            <div>
                                <a style="background-color: var(--bg-bs-body); color: var(--bg-bs-text)"
                                    href="/media/media-informasi/{{ $infografi->jenis }}/{{ $infografi->slug }}"><img
                                        style="width: 40px" src="{{ asset('images\icon\catalog-magazine.png') }}"
                                        alt="">
                                    {{ $infografi->nama }}
                                </a>
                                <p>
                                    <a style="background-color: var(--bg-bs-body); color: var(--bg-bs-text)"
                                        href="/media/media-informasi/{{ $infografi->jenis }}">
                                        @if ($infografi->jenis === 'Majalah')
                                        <strong>Majalah</strong>
                                        @elseif($infografi->jenis === 'Leaflet')
                                        <strong>Leaflet</strong>
                                        @else
                                        <strong>Infografis</strong>
                                        @endif
                                    </a>
                                    | <i class="bi bi-clock"></i>
                                    {{ \Carbon\Carbon::parse($infografi->created_at)->format('d-M-y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <div id="section3" class="text-light col-8 col-lg-8 p-3 border-radius">
                <a href="/media/galeri/videos">
                    <h4 class="text-light m-0 text-5 font-weight-light d-flex justify-content-center"><i
                            class="fas fa-photo-video"></i> Video </h4>
                </a>
            </div>
            <div class="col-8 col-lg-8 mt-3">
                @foreach ($galeris as $galeri)
                <article class="entry entry-single">
                    <div class="sidebar-item recent-posts" style="overflow: auto;">
                        <div class="post-item clearfix">
                            <div>
                                <a style="background-color: var(--bg-bs-body); color: var(--bg-bs-text)"
                                    href="/media/galeri/video/{{ $galeri->slug }}"><img style="width: 40px"
                                        src="{{ asset('images\icon\youtube.png') }}" alt="">
                                    {{ $galeri->nama }}
                                </a>
                                <p><i class="bi bi-clock"></i>
                                    {{ \Carbon\Carbon::parse($galeri->created_at)->format('d-M-y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection