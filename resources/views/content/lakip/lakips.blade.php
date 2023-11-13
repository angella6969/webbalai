@extends('layout.content.main')
@section('container')
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Informasi Publik</span>
                    <h1 class="font-weight-bold text-color-light">Laporan Akuntabilitas Kinerja Instansi Pemerintahan</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a style="color: black" href="/">Beranda</a> / <a href="" style="color: black"
                                class="active"><strong>Kinerja</strong></a></li>
                        {{-- <li class="active"> Profil</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <label for="">
                    <h1>Laporan Akuntabilitas Kinerja Instansi Pemerintahan Balai Besar Wilayah Sungai Serayu Opak</h1>
                </label>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokumen Informasi </th>
                                <th scope="col">Unduh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lakips as $lakip)
                                <tr style="text-align: center;">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lakip->nama }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . substr($lakip->url_pdf, 7)) }}" class="paragraf-a">
                                            <img src="{{ asset('images/icon/download (1).svg') }}" alt="Unduh">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="margin:100px"></div>
        </div>
    </section>
@endsection
