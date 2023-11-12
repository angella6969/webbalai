@extends('layout.content.main')
@section('container')
<!-- ======= Blog Single Section ======= -->
<section
    style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <div class="container"><br>
        <div class="row align-items-center ">
            <div class="col-md-8 text-left">
                <span class="tob-sub-title text-color-light d-block">Infrastruktur</span>
                <h1 class="font-weight-bold text-color-light">Embung</h1>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                    <li><a class="text-color-light" href="/">Beranda</a> / <a href="" class="active">Profil</a></li>
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
                        <img src="{{ asset('storage/' . substr($embung->url_foto1, 6)) }}" alt="" class=""
                            style=" width: 100%; height: 100%;">
                    </div>

                    <h1 class="entry-title">
                        <p>{{ $embung->nama }}</p>
                    </h1>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="">{{
                                    $embung->created_at }}</time></a></li>
                        </ul>
                    </div>
                    {{-- <div class="container"> --}}
                        <div class="entry-content ">
                            <p> {!! $embung->body !!}
                            </p> <br>

                            <div class="row">
                                <div class="col-6">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td><strong>NAMA</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>LOKASI</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->lokasi }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>VOLUME TAMPUNG</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->volume_tampung }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>LUAS GENANGAN</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->luas_genangan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>TAHUN PEMBANGUNAN</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->tahun_pembangunan }} </td>
                                            </tr>
                                            {{-- <tr>
                                                <td><strong>TINGGI DASAR SUNGAI</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->tinggi_dasar_sungai }} M</td>
                                            </tr>
                                            <tr>
                                                <td><strong>PANJANG PUNCAK</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->panjang_puncak }} M</td>
                                            </tr>
                                            <tr>
                                                <td><strong>LEBAR PUNCAK</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->lebar_puncak }} M</td>
                                            </tr>
                                            <tr>
                                                <td><strong>ELEVASI PUNCAK</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->elevasi_puncak }} M</td>
                                            </tr>
                                            <tr>
                                                <td><strong>VOLUME TAMPUNG NORMAL (M3)</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->volume_tampung_normal }} M</td>
                                            </tr>
                                            <tr>
                                                <td><strong>VOLUME TAMPUNG NORMAL (M3)</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->volume_tampung_normal }} M</td>
                                            </tr>
                                            <tr>
                                                <td><strong>VOLUME TAMPUNG TOTAL (M3)</strong></td>
                                                <td><strong>:</strong></td>
                                                <td>{{ $embung->volume_tampung_total }} M</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <img src="{{ asset('storage/' . substr($embung->url_foto2, 6)) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/' . substr($embung->url_foto3, 6)) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/' . substr($embung->url_foto4, 6)) }}" alt=""
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