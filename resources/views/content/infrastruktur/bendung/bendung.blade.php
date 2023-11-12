@extends('layout.content.main')
@section('container')
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Infrastruktur</span>
                    <h1 class="font-weight-bold text-color-light">Bendung</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" href="/">Beranda</a> / <a href=""
                                class="active">Profil</a></li>
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
                        <div class="entry-img d-flex justify-content-center">
                            <img src="{{ asset('storage/' . substr($bendung->url_foto1, 6)) }}" alt=""
                                class="" style=" width: 150vw; height: 100%;">
                        </div>

                        <h1 class="entry-title mt-3" >
                            <p>{{ $bendung->nama }}</p>
                        </h1>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="">{{ $bendung->created_at }}</time></a></li>
                            </ul>
                        </div>
                        {{-- <div class="container"> --}}
                        <div class="entry-content ">
                            <p>{{ $bendung->body }}</p> <br>

                            <div class="row">
                                <div class="col-6">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td><strong>NAMA</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $bendung->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>LOKASI</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $bendung->lokasi }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>TAHUN PEMBANGUNAN</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $bendung->tahun_pembangunan }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <img src="{{ asset('storage/' . substr($bendung->url_foto1, 6)) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/' . substr($bendung->url_foto2, 6)) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/' . substr($bendung->url_foto4, 6)) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
