@extends('layout.content.main')
@section('container')
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Media Informasi</span>
                    <h1 class="font-weight-bold text-color-light">{{ $Infografis->jenis }}</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="/">Beranda</a> / <a href=""
                                style="color: black" class="active">Media</a></li>
                        {{-- <li class="active"> Profil</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 entries" style="margin-top:20px">
                    <article class="entry entry-single">
                        <h1 class="entry-title mt-3">
                            <p>{{ $Infografis->nama }}</p>
                        </h1>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="">{{ $Infografis->created_at }}</time></a></li>
                            </ul>
                        </div>
                        <div class="col-12 " style="">
                            <div>
                                <img src="{{ asset('storage/' . substr($Infografis->url_foto1, 6)) }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div>
                                <img src="{{ asset('storage/' . substr($Infografis->url_foto2, 6)) }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div>
                                <img src="{{ asset('storage/' . substr($Infografis->url_foto3, 6)) }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
