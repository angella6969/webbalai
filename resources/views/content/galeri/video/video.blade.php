@extends('layout.content.main')
@section('container')
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Media</span>
                    <h1 class="font-weight-bold text-color-light">Video</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a style="color: black" href="/">Beranda</a> / <a href="" style="color: black"
                                class="active"><strong>Galeri</strong></a></li>
                        {{-- <li class="active"> Profil</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                {{-- @foreach ($videos as $video) --}}
                    <div class="col-lg-12" style="margin-top:20px">
                        <article class="entry entry-single">
                            <div class=" d-flex justify-content-center">
                                <iframe width="100%" height="400px"
                                    src="https://www.youtube.com/embed/{{ $video->url_yt }}" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </article>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
@endsection
