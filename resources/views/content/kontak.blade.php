@extends('layout.content.main')
@section('container')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <section
        style="background: rgba(3, 15, 107, 0.2); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">PROFIL</span>
                    <h1 class="font-weight-bold text-color-light">Kontak</h1>
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

    <div class="container mt-3 mb-3" id="map"></div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row" style="padding: 20px">
            <div class="col-lg-4">
                <ul>
                    <li class="d-flex justify-content-center"><img src="{{ asset('images\icon\mail (1).svg ') }}"
                            alt=""></li>
                    <li>
                        ppid_bbwsso@pu.go.id: (Permintaan Informasi/data)
                        so.umum@yahoo.co.id: (Persuratan)
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <ul>
                    <li class="d-flex justify-content-center"><img src="{{ asset('images\icon\map-pin (1).svg ') }}"
                            alt=""></li>
                    <li>Jl. Solo Km. 6, Ngentak, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0  ">
                <ul>
                    <li class="d-flex justify-content-center"><img src="{{ asset('images\icon\phone-call (1).svg ') }}"
                            alt=""></li>
                    <li>Telp: (0274) 489-172
                        Fax: (0274) 489-552</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-7.783111083505881, 110.40917952890833], 19);

        // Tambahkan peta tile dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Tambahkan marker (pin)
        var marker = L.marker([-7.783111083505881, 110.40917952890833]).addTo(map);

        // Anda juga bisa menambahkan popup untuk marker
        marker.bindPopup("BBWS Serayu Opak").openPopup();
    </script>
@endsection
