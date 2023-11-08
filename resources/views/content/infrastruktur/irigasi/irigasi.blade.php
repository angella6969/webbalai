@extends('layout.content.main')
@section('container')
    <section 
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Infrastruktur</span>
                    <h1 class="font-weight-bold text-color-light">Irigasi</h1>
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
                            {{-- <img src="{{ asset('storage/' . substr($berita->url_foto,6)) }}" alt="" class="img-fluid"
                            style="border-radius: 5px"> --}}
                            <img src="{{ asset('images\image\struktur_organisasi\Bendungan_Sermo-1.jpg') }}" alt=""
                                class="" style=" width: 150vw; height: 100%;">
                        </div>

                        <h1 class="entry-title">
                            {{-- <p>{{ $berita->judul }}</p> --}}
                            Bendungan_Sermo-1
                        </h1>

                        <div class="entry-meta">
                            <ul>
                                {{-- <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="">{{
                                    $berita->created_at }}</time></a></li> --}}
                                tgl 12-12-12
                            </ul>
                        </div>
                        {{-- <div class="container"> --}}
                        <div class="entry-content ">
                            {{-- <p> --}}
                            {{-- {!! $berita->body !!} --}}

                            {{-- </p> --}}
                            {{-- <div class="container"> --}}
                            <p>Bendungan Sermo berada di Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta.
                                Bendungan
                                ini
                                memiliki tujuan untuk suplesi sistem irigasi daerah Kalibawang yang memiliki cakupan
                                areal
                                seluas 152 Ha.

                                Sermo memiliki beberapa bagian yaitu bendungan utama dengan tipe urugan batu berzona
                                dengan
                                inti kedap air. Memiliki puncak elevasi +141.60 m, panjang 190.00 m, lebar 8.00 m,
                                tinggi
                                max 58.60 m, volume urugan 568.000 m3. Kemudian coffer dam berupa type urugan batu
                                dengan
                                selimut kedap air dengan elevasi mercu + 105.00 m. Bangunan pelimpah berupa type
                                ”ogee”
                                tanpa pintu dengan lebar 26.00 m, elevasi +136.60 m, peredam energi bak lontar dan
                                lantai
                                peredam energi. Terowongan memiliki bentuk tapal kuda dengan diameter 4.20 m,
                                panjang
                                221 m,
                                kapasitas 179.50 m3/detik, elevasi inlet +89.00 m, elevasi outlet +84.00 m.

                                Sarana dan prasarana yang ada di Bendungan Sermo adalah bendungan utama, bendungan
                                pelimpah,
                                terowongan pengelak, menara pengambilan, sarana elektrik, sarana mekanik,
                                instrumentasi
                                keamanan bendungan, instumentasi hidrologi dan klimatologi, kantor, perumahan, dan
                                mess.

                                Tujuan pembangunan waduk ini adalah untuk suplesi sistem irigasi daerah Kalibawang
                                yang
                                memiliki cakupan areal seluas 7.152 Ha. Sistem irigasi tersebut merupakan
                                interkoneksi
                                dari
                                beberapa daerah irigasi dan juga pemanfaatan air baku sekaligus pariwisata.</p>
                            <br>
                            {{--
                            </div> --}}

                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h5><strong>TAHUN DIRESMIKAN</strong></h5>
                                        <p style="font-size: 14px">LOKASI2</p>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>TAHUN DIRESMIKAN</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>TAHUN DIRESMIKAN</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>TAHUN DIRESMIKAN</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>TAHUN DIRESMIKAN</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                    <div>
                                        <h4><strong>LOKASI</strong></h4>
                                        <h6>LOKASI2</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <img src="{{ asset('images\image\struktur_organisasi\Bendungan_Sermo-1.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('images\image\struktur_organisasi\Bendungan_Sermo-1.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('images\image\struktur_organisasi\Bendungan_Sermo-1.jpg') }}"
                                            alt="" class="img-fluid">
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
