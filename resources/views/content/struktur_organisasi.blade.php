@extends('layout.content.main')
@section('container')
    <style>
        .image-container {
            white-space: nowrap;
            overflow-x: auto;
        }

        .button {
            display: inline-block;
        }

        .image-element.hidden {
            display: none;
        }
    </style>
    <section class="" data-plugin-image-background="" data-plugin-options=""
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">PROFIL</span>
                    <h1 class="font-weight-bold text-color-light">Struktur Organisasi</h1>
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
    <section class="section section-height-3">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                {{-- <aside class="sidebar col-md-4 col-lg-4 order-2">
                    <div class="accordion accordion-default accordion-toggle accordion-style-1 mb-5" data-plugin-sticky=""
                        data-plugin-options="{'offset_top': 100}" role="tablist" style="">
                        <div class="card">
                            <div id="toggleCategories" class="accordion-body collapse show"
                                data-uw-rm-sr-aria-labelledby="categories">
                                <div class="card-body">
                                    <ul class="list list-unstyled">


                                        <li class="mb-2"><a href="#" class="font-weight-semibold"
                                                aria-label="Open this option" data-uw-rm-empty-ctrl=""><i
                                                    class="fas  ml-1 mr-1 pr-2"></i></a></li>



                                        <li class="mb-2">
                                            <a href="#" class="font-weight-semibold text-color-primary"><i
                                                    class="fas fa-angle-right ml-1 mr-1 pr-2" id="photos"
                                                    data-toggle="collapse" data-target="#submenuPhotos0"
                                                    aria-expanded="true" aria-controls="submenuPhotos" role="list"
                                                    onclick="return false;" data-uw-rm-kbnav="click"></i> Profil</a>
                                            <ul class="list list list-style-1 collapse show pl-3 mt-2" id="submenuPhotos0"
                                                aria-labelledby="photos">



                                                <li><a href="https://pu.go.id/page/Visi-dan-Misi" target="_self">Visi dan
                                                        Misi</a></li>
                                                <li><a href="#" target="_self">Sejarah</a></li>

                                                <ul class="list list list-style-1 collapse show pl-3 mt-2"
                                                    id="submenuPhotos0" aria-labelledby="photos">
                                                    <li><a href="https://pu.go.id/page/Peristiwa-Heroik-3-Des"
                                                            target="_self">Peristiwa Heroik 3 Desember</a></li>
                                                    <li><a href="https://pu.go.id/page/Dari-Masa-ke-Masa"
                                                            target="_self">Dari Masa ke Masa</a></li>
                                                    <li><a href="https://pu.go.id/page/Mereka-yang-Gugur"
                                                            target="_self">Mereka yang Gugur</a></li>
                                                    <li><a href="https://pu.go.id/page/Kantor-PUPR" target="_self">Kantor
                                                            PUPR</a></li>
                                                    <li><a href="https://pu.go.id/page/Mars-PUPR" target="_self">Mars
                                                            PUPR</a></li>
                                                    <li><a href="https://pu.go.id/assets/media/sejarah_perkembangan_pekerjaan_umum_indonesia.pdf"
                                                            target="_self" data-uw-pdf-br="1" data-uw-pdf-doc=""> Sejarah
                                                            Perkembangan Pekerjaan Umum di Indonesia</a></li>
                                                </ul>



                                                <li><a href="https://pu.go.id/page/Tugas-dan-Fungsi" target="_self">Tugas
                                                        dan Fungsi</a></li>




                                                <li><a href="https://pu.go.id/page/Struktur-Organisasi"
                                                        target="_self">Struktur Organisasi</a></li>




                                                <li><a href="https://pu.go.id/page/Motto-dan-Lambang" target="_self">Motto
                                                        dan Lambang</a></li>




                                                <li><a href="#" target="_self">Informasi Pejabat</a></li>

                                                <ul class="list list list-style-1 collapse show pl-3 mt-2"
                                                    id="submenuPhotos0" aria-labelledby="photos">
                                                    <li><a href="https://pu.go.id/profile-pejabat" target="_self">Profil
                                                            Pejabat</a></li>
                                                    <li><a href="https://pu.go.id/page/Perjanjian-Kerja"
                                                            target="_self">Perjanjian Kerja</a></li>
                                                </ul>
                                            </ul>

                                        </li>


                                        <li class="mb-2">
                                            <a href="#" class="font-weight-semibold text-color-primary"><i
                                                    class="fas fa-angle-right ml-1 mr-1 pr-2" id="photos"
                                                    data-toggle="collapse" data-target="#submenuPhotos1"
                                                    aria-expanded="true" aria-controls="submenuPhotos" role="list"
                                                    onclick="return false;" data-uw-rm-kbnav="click"></i> Organisasi</a>
                                            <ul class="list list list-style-1 collapse show pl-3 mt-2" id="submenuPhotos1"
                                                aria-labelledby="photos">



                                                <li><a href="https://pu.go.id/struktur-organisasi/sekretariat-jenderal"
                                                        target="_self">Sekretariat Jenderal</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/inspektorat-jenderal"
                                                        target="_self">Inspektorat Jenderal</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-sumber-daya-air"
                                                        target="_self">Ditjen Sumber Daya Air</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-bina-marga"
                                                        target="_self">Ditjen Bina Marga</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-cipta-karya"
                                                        target="_self">Ditjen Cipta Karya</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-perumahan"
                                                        target="_self">Ditjen Perumahan</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-bina-konstruksi"
                                                        target="_self">Ditjen Bina Konstruksi</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-pembiayaan-infrastruktur-pekerjaan-umum-dan-perumahan"
                                                        target="_self">Ditjen Pembiayaan Infrastruktur Pekerjaan Umum dan
                                                        Perumahan</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/badan-pengembangan-infrastruktur-wilayah"
                                                        target="_self">Badan Pengembangan Infrastruktur Wilayah</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/badan-pengembangan-sumber-daya-manusia"
                                                        target="_self">Badan Pengembangan Sumber Daya Manusia</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/badan-pengatur-jalan-tol"
                                                        target="_self">Badan Pengatur Jalan Tol</a></li>

                                            </ul>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="popularPosts">
                                <h3 class="text-3 mb-0 text-color-primary" data-uw-rm-heading="level" role="heading"
                                    aria-level="2"><a href="#" data-toggle="collapse"
                                        data-target="#togglePopularPosts" aria-expanded="false"
                                        aria-controls="togglePopularPosts">Berita Terkini</a></h3>
                            </div>
                            <div id="togglePopularPosts" class="accordion-body collapse show"
                                aria-labelledby="popularPosts">
                                <div class="card-body">
                                    <article class="row align-items-center mb-3">
                                        <div class="col-4 pr-0">
                                            <a href="https://pu.go.id/berita/28-Lulusan-Pelatihan-Diharapkan-Berperan-Dalam-Proses-Sertifikasi-Kinerja-Bangunan-Gedung-Hijau-(BGH)"
                                                aria-label="pu.go.id" data-uw-rm-empty-ctrl=""><img
                                                    src="https://pu.go.id/" class="img-fluid hover-effect-2"
                                                    alt="" data-uw-rm-alt-original="" role="presentation"
                                                    data-uw-rm-alt="SRC"></a>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="text-2 mb-0 text-color-primary" data-uw-rm-heading="level"
                                                role="heading" aria-level="3"><a
                                                    href="https://pu.go.id/berita/28-Lulusan-Pelatihan-Diharapkan-Berperan-Dalam-Proses-Sertifikasi-Kinerja-Bangunan-Gedung-Hijau-(BGH)"
                                                    class="text-1">28 Lulusan Pelatihan Diharapkan Berperan Dalam Proses
                                                    Sertifikasi Kinerja Bangunan Gedung Hijau (BGH)</a></h4>
                                        </div>
                                    </article>
                                    <article class="row align-items-center mb-3">
                                        <div class="col-4 pr-0">
                                            <a href="https://pu.go.id/berita/Menuju-Construction-4.0,-BPSDM-Selenggarakan-Pelatihan-Building-Information-Modelling-(BIM)"
                                                aria-label="pu.go.id" data-uw-rm-empty-ctrl=""><img
                                                    src="https://pu.go.id/" class="img-fluid hover-effect-2"
                                                    alt="" data-uw-rm-alt-original="" role="presentation"
                                                    data-uw-rm-alt="SRC"></a>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="text-2 mb-0 text-color-primary"><a
                                                    href="https://pu.go.id/berita/Menuju-Construction-4.0,-BPSDM-Selenggarakan-Pelatihan-Building-Information-Modelling-(BIM)"
                                                    class="text-1">Menuju Construction 4.0, BPSDM Selenggarakan Pelatihan
                                                    Building Information Modelling (BIM)</a></h4>
                                        </div>
                                    </article>
                                    <article class="row align-items-center mb-3">
                                        <div class="col-4 pr-0">
                                            <a href="https://pu.go.id/berita/BPSDM-Mendukung-WMO-Selenggarakan-Short-Course-Hydrological-Network-To-Support-Water-Resources-Management"
                                                aria-label="pu.go.id" data-uw-rm-empty-ctrl=""><img
                                                    src="https://pu.go.id/" class="img-fluid hover-effect-2"
                                                    alt="" data-uw-rm-alt-original="" role="presentation"
                                                    data-uw-rm-alt="SRC"></a>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="text-2 mb-0 text-color-primary"><a
                                                    href="https://pu.go.id/berita/BPSDM-Mendukung-WMO-Selenggarakan-Short-Course-Hydrological-Network-To-Support-Water-Resources-Management"
                                                    class="text-1">BPSDM Mendukung WMO Selenggarakan Short Course
                                                    Hydrological Network To Support Water Resources Management </a></h4>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside> --}}
                <!-- sidebar -->

                <!-- main content-->
                <div class="col-md-12 col-lg-12 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">
                        <header class="blog-post-header mt-3 mb-3">

                        </header>
                        <header class="blog-post-header mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <h1 class="font-weight-bold text-color-primary mb-3"
                                style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" role="heading" aria-level="2"
                                data-uw-rm-heading="level">Hukum Pembentukan
                                Balai Besar Wilayah Sungai Serayu Opak</h1>
                            <h6 class="text-center mt-5 mb-5" style="line-height: 1.2; margin-right: 0px; margin-left: 0px;"
                                data-uw-rm-heading="level" role="heading" aria-level="3">Permen PUPR No. 15/PRT/M/2015
                                tentang organisasi dan Tata kerja Kementerian Pekerjaan Umum dan Perumahan Rakyat:

                                “Menyelenggarakan perumusan dan pelaksanaan kebijakan di bidang pengelolaan sumber daya air
                                sesuai dengan ketentuan perundang-undangan”</h6>
                            <h6 class="text-center mt-5 mb-5" style="line-height: 1.2; margin-right: 0px; margin-left: 0px;"
                                data-uw-rm-heading="level" role="heading" aria-level="3">Permen PUPR No. 34/2015 tentang UPT
                                di lingkungan Kementerian Pekerjaan Umum dan Perumahan Rakyat:

                                “UPT di lingkungan Kementerian Pekerjaan Umum dan Perumahan Rakyat berupa Balai Besar, Balai
                                atau Loka”</h6>
                        </header>
                        <h2 class="text-center mb-4 mt-4" style="line-height: 1.2; margin-right: 0px; margin-left: 0px;">
                            <strong>Struktur Organisasi
                                Balai Besar Wilayah Sungai Serayu Opak</strong>
                        </h2>
                        {{-- <div class="row">
                            <div class="container">
                                <div>
                                    <img class="background-element" src="{{ asset('images\image\struktur_organisasi\STRUKTUR-ORGANISASI-BBWSSO.jpg') }}"
                                        alt="">
                                    <img class="background-element" src="{{ asset('images\image\struktur_organisasi\2.-Satker-Balai-2021-2048x1393.jpg') }}"
                                        alt="">
                                    <img class="background-element" src="{{ asset('images\image\struktur_organisasi\3.-SNVT-PJSA-2021-2048x1393.jpg') }}"
                                        alt="">
                                    <img class="background-element" src="{{ asset('images\image\struktur_organisasi\4.-SNVT-PJPA-2021-2048x1393.jpg') }}"
                                        alt="">
                                    <img class="background-element" src="{{ asset('images\image\struktur_organisasi\5.-Satker-OP-2021-2048x1393.jpg') }}"
                                        alt="">
                                    <img class="background-element" src="{{ asset('images\image\struktur_organisasi\6.-Satker-Pembangunan-Bendungan-2021-2048x1393.jpg') }}"
                                        alt="">
                                    <img class="background-element" src="{{ asset('images\image\struktur_organisasi\7.-Satker-Pengadaan-Tanah-2021-2048x1393.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <table class="table">
                            <thead>
                                <tr><button class="btn btn-light" onclick="toggleImage(0)">BBWS</button></tr>
                                <tr><button class="btn btn-light" onclick="toggleImage(1)">PJSA 2021</button></tr>
                                <tr><button class="btn btn-light" onclick="toggleImage(2)">Satker Balai 2021</button></tr>
                                <tr><button class="btn btn-light" onclick="toggleImage(3)">PJPA 2021</button></tr>
                                <tr><button class="btn btn-light" onclick="toggleImage(4)">Satker OP 2021</button></tr>
                                <tr><button class="btn btn-light" onclick="toggleImage(5)">Satker Bendungan 2021</button>
                                </tr>
                                <tr><button class="btn btn-light"
                                        onclick="toggleImage(6)">Satker-Pengadaan-Tanah-2021</button></tr>
                            </thead>
                            <tbody>

                                <td>
                                    <img class="image-element background-element"
                                        src="{{ asset('images\image\struktur_organisasi\STRUKTUR-ORGANISASI-BBWSSO.jpg') }}"
                                        alt="">
                                </td>
                                <td>
                                    <img class="image-element background-element"
                                        src="{{ asset('images\image\struktur_organisasi\2.-Satker-Balai-2021-2048x1393.jpg') }}"
                                        alt="">
                                </td>
                                <td>
                                    <img class="image-element background-element"
                                        src="{{ asset('images\image\struktur_organisasi\3.-SNVT-PJSA-2021-2048x1393.jpg') }}"
                                        alt="">
                                </td>
                                <td>
                                    <img class="image-element background-element"
                                        src="{{ asset('images\image\struktur_organisasi\4.-SNVT-PJPA-2021-2048x1393.jpg') }}"
                                        alt="">
                                </td>
                                <td>
                                    <img class="image-element background-element"
                                        src="{{ asset('images\image\struktur_organisasi\5.-Satker-OP-2021-2048x1393.jpg') }}"
                                        alt="">
                                </td>
                                <td>
                                    <img class="image-element background-element"
                                        src="{{ asset('images\image\struktur_organisasi\6.-Satker-Pembangunan-Bendungan-2021-2048x1393.jpg') }}"
                                        alt="">
                                </td>
                                <td>
                                    <img class="image-element background-element"
                                        src="{{ asset('images\image\struktur_organisasi\7.-Satker-Pengadaan-Tanah-2021-2048x1393.jpg') }}"
                                        alt="">
                                </td>
                            </tbody>
                        </table> --}}
                        <div class="image-container d-flex justify-content-center mb-3">
                            <button class="btn btn-light" onclick="toggleImage(0)">BBWS</button>
                            <button class="btn btn-light" onclick="toggleImage(1)">Satker Balai 2021</button>
                            <button class="btn btn-light" onclick="toggleImage(2)">PJSA 2021</button>
                            <button class="btn btn-light" onclick="toggleImage(3)">PJPA 2021</button>
                            <button class="btn btn-light" onclick="toggleImage(4)">Satker OP 2021</button>
                            <button class="btn btn-light" onclick="toggleImage(5)">Satker Bendungan 2021</button>
                            <button class="btn btn-light" onclick="toggleImage(6)">Satker Pengadaan Tanah 2021</button>
                        </div>

                        <div class="image-container">
                            <img class="image-element background-element" data-index="0"
                                src="{{ asset('images\image\struktur_organisasi\STRUKTUR-ORGANISASI-BBWSSO.jpg') }}"
                                alt="">
                            <img class="image-element background-element" data-index="1"
                                src="{{ asset('images\image\struktur_organisasi\2.-Satker-Balai-2021-2048x1393.jpg') }}"
                                alt="">
                            <img class="image-element background-element" data-index="2"
                                src="{{ asset('images\image\struktur_organisasi\3.-SNVT-PJSA-2021-2048x1393.jpg') }}"
                                alt="">
                            <img class="image-element background-element" data-index="3"
                                src="{{ asset('images\image\struktur_organisasi\4.-SNVT-PJPA-2021-2048x1393.jpg') }}"
                                alt="">
                            <img class="image-element background-element" data-index="4"
                                src="{{ asset('images\image\struktur_organisasi\5.-Satker-OP-2021-2048x1393.jpg') }}"
                                alt="">
                            <img class="image-element background-element" data-index="5"
                                src="{{ asset('images\image\struktur_organisasi\6.-Satker-Pembangunan-Bendungan-2021-2048x1393.jpg') }}"
                                alt="">
                            <img class="image-element background-element" data-index="6"
                                src="{{ asset('images\image\struktur_organisasi\7.-Satker-Pengadaan-Tanah-2021-2048x1393.jpg') }}"
                                alt="">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    {{-- <script>
        function toggleImage(index) {
            var images = document.querySelectorAll('.image-element');
            images.forEach(function(image, i) {
                if (i === index) {
                    image.classList.toggle('active');
                } else {
                    image.classList.remove('active');
                }
            });
        }
    </script> --}}
    <script>
        function toggleImage(index) {
            var images = document.querySelectorAll('.image-element');
            images.forEach(function(image) {
                var dataIndex = image.getAttribute('data-index');
                if (dataIndex == index) {
                    image.classList.remove('hidden');
                    localStorage.setItem('activeImageIndex', index);
                } else {
                    image.classList.add('hidden');
                }
            });
        }

        // Check for stored active image index
        var storedIndex = localStorage.getItem('activeImageIndex');
        if (storedIndex !== null) {
            toggleImage(parseInt(storedIndex));
        }
    </script>
@endsection
