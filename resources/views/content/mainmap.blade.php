@extends('layout.content.main')
@section('container')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <style>
       

        .pading-1 {
            padding-left: 20px;
        }

        .pading-2 {
            padding-left: 30px;
        }

        .pading-3 {
            padding-left: 40px;
        }
    </style>
    <section
        style="background: rgba(3, 15, 107, 0.2); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">PROFIL</span>
                    <h1 class="font-weight-bold text-color-light">Main Map</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="/balai/bbwsserayuopak/">Beranda</a> / <a href=""
                                style="color: black" class="active">Profil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row" style="padding: 20px">

            <div class="col-lg-8">

                <ul>
                    <li>
                        <p><strong>Profil</strong></p>
                    </li>
                    <ul class="pading-1">
                        <li>
                            <p> <i data-feather="corner-down-right"></i>Sejarah</p>
                        </li>
                        <li>
                            <p> <i data-feather="corner-down-right"></i> Visi dan Misi</p>
                        </li>
                        <li>
                            <p> <i data-feather="corner-down-right"></i> Fungsi dan Tugas</p>
                        </li>
                        <li>
                            <p> <i data-feather="corner-down-right"></i> Struktur Organisasi</p>
                        </li>
                        <li>
                            <p> <i data-feather="corner-down-right"></i> Kontak</p>
                        </li>
                    </ul>


                    <li>
                        <p><strong>Berita</strong></p>
                    </li>
                    <ul class="pading-1">
                        <li>
                            <p><i data-feather="corner-down-right"></i>Berita Balai</p>
                        </li>
                        <li>
                            <p><i data-feather="corner-down-right"></i>Agenda Kegiatan</p>
                        </li>
                    </ul>



                    <li>
                        <p><strong>Info Publik</strong></p>
                    </li>
                    <ul class="pading-1">
                        <li>
                            <p><i data-feather="corner-down-right"></i>Daftar Informasi</p>
                        </li>
                        <li>
                            <p><i data-feather="corner-down-right"></i>Perencanaan</p>
                            <ul class="pading-2">
                                <li>
                                    <p><i data-feather="corner-down-right"></i>Rencana Strategis </p>
                                </li>
                                <li>
                                    <p><i data-feather="corner-down-right"></i>Pola WS dan RPSDA </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p><i data-feather="corner-down-right"></i>Kinerja</p>
                            <ul class="pading-2">
                                <li>
                                    <p><i data-feather="corner-down-right"></i>LAKIP</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p><i data-feather="corner-down-right"></i>Infrastruktur</p>
                            <ul class="pading-2">
                                <li>
                                    <p><i data-feather="corner-down-right"></i>Informasi</p>
                                </li>
                                <ul class="pading-3">
                                    <li>
                                        <p><i data-feather="corner-down-right"></i> Bendungan </p>
                                    </li>
                                    <li>
                                        <p><i data-feather="corner-down-right"></i> Bendung </p>
                                    </li>
                                    <li>
                                        <p><i data-feather="corner-down-right"></i> Embung </p>
                                    </li>
                                    <li>
                                        <p><i data-feather="corner-down-right"></i> Irigasi </p>
                                    </li>
                                </ul>
                                <p><i data-feather="corner-down-right"></i>Data</p>
                                <ul class="pading-3">
                                    <li>
                                        <p><i data-feather="corner-down-right"></i> Aplikasi 1 </p>
                                    </li>
                                    <li>
                                        <p><i data-feather="corner-down-right"></i> Aplikasi 2 </p>
                                    </li>
                                    <li>
                                        <p><i data-feather="corner-down-right"></i> Aplikasi 3 </p>
                                    </li>
                                </ul>
                            </ul>
                        </li>

                        <li>
                            <p><strong>Media</strong></p>
                            <ul class="pading-1">
                                <li>
                                    <p><i data-feather="corner-down-right"></i>Media Informasi</p>
                                    <ul class="pading-2">
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Majalah</p>
                                        </li>
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Leaflet dan Brosur</p>
                                        </li>
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Infografis</p>
                                        </li>
                                    </ul>
                                    <p><i data-feather="corner-down-right"></i>Galeri</p>
                                    <ul class="pading-2">
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Foto</p>
                                        </li>
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>VIdeo</p>
                                        </li>
                                    </ul>
                                </li>
                                <li></li>
                            </ul>
                        </li>
                        <li>
                            <p><strong>Layanan</strong></p>
                            <ul class="pading-1">
                                <li>
                                    <p><i data-feather="corner-down-right"></i>PPID BBWS SO</p>
                                    <ul class="pading-2">
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Profil</p>
                                        </li>
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Prosedur Layanan</p>
                                        </li>
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>KALATIRTA</p>
                                        </li>
                                    </ul>
                                    <p><i data-feather="corner-down-right"></i>Perpustakaan Online</p>
                                    <p><i data-feather="corner-down-right"></i>Pengaduan</p>
                                    <ul class="pading-2">
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Pengaduan Balai</p>
                                        </li>
                                        <li>
                                            <p><i data-feather="corner-down-right"></i>Pengaduan PUPR</p>
                                        </li>
                                    </ul>
                                </li>
                                <li></li>
                            </ul>
                        </li>

                    </ul>
                </ul>
            </div>
        </div>
    </div>
@endsection
