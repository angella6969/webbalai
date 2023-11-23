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
                <h4 class="text-light m-0 text-5 font-weight-light"><i class="far fa-newspaper"></i> Infrastruktur
                </h4>
            </div>
            <div class="col-8 col-lg-8 mt-3">
                @foreach ($infrastrukturs as $infrastruktur)
                <article class="entry entry-single">
                    <div class="sidebar-item recent-posts" style="overflow: auto;">
                        <div class="post-item clearfix">
                            <div>
                                <a style="color: black" href=""><img src="{{ asset('images\icon\file-text (2).svg') }}"
                                        alt="">
                                    {{ $infrastruktur->nama }}
                                </a>
                                <p><i class="bi bi-clock"></i>
                                    {{ $infrastruktur->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <div id="section2" class="text-light col-8 col-lg-8 p-3 border-radius">
                <h4 class="text-light m-0 text-5 font-weight-light"><i class="fas fa-images"></i> Brita</h4>
            </div>
            <div class="col-8 col-lg-8 mt-3">
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
            <div id="section2" class="text-light col-8 col-lg-8 p-3 border-radius">
                <h4 class="text-light m-0 text-5 font-weight-light"><i class="fas fa-images"></i> Media</h4>
            </div>
            <div class="col-8 col-lg-8 mt-3">
                @foreach ($infografis as $infografi)
                <article class="entry entry-single">
                    <div class="sidebar-item recent-posts" style="overflow: auto;">
                        <div class="post-item clearfix">
                            <div>
                                <a style="color: black" href=""><img src="{{ asset('images\icon\file-text (2).svg') }}"
                                        alt="">
                                    {{ $infografi->judul }}
                                </a>
                                <p>{{ $infografi->jenis }}</p>
                                <p><i class="bi bi-clock"></i>
                                    {{ $infografi->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <div id="section3" class="text-light col-8 col-lg-8 p-3 border-radius">
                <h4 class="text-light m-0 text-5 font-weight-light"><i class="fas fa-photo-video"></i> Video </h4>
            </div>
            <div class="col-8 col-lg-8 mt-3">
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
        </div>
    </div>
</section>
@endsection