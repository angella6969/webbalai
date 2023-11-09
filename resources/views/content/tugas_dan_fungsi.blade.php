@extends('layout.content.main')
@section('container')
    <style>
        .image-container {
            white-space: nowrap;
            overflow-x: auto;
        }

        .image-container ul {
            list-style-type: none;
            padding: 0;
        }

        .image-container ul li {
            display: none;
            white-space: normal;
        }

        .image-container ul li.active {
            display: block;
        }

        .btn {
            margin: 5px;
            background-color: rgba(255, 201, 40, 0.8);
            width: 20%;
            padding: 10px 20px;
        }

        @media (max-width: 768px) {
            .btn {
                display: block;
                width: 100%;
            }
        }

        .btn:hover {
            background-color: rgba(53, 71, 1190.8);
            color: #fff;
        }

        .btn.active-button {
            background-color: rgba(53, 71, 1190.8);
            color: white;
        }
    </style>
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">PROFIL</span>
                    {{-- <h1 class="font-weight-bold text-color-light">Tugas dan Fungsi</h1> --}}
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="/">Beranda</a> / <a href=""
                                style="color: black" class="active">Profil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-height-3">
        <div class="container">
            <div class="row">
                <!-- main content-->
                <div class="col-md-12 col-lg-12 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">
                        <header class="blog-post-header mt-3 mb-3">

                        </header>
                        <header data-aos="fade-up" data-aos-delay="100"class="blog-post-header mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <h1 class="font-weight-bold text-color-primary mb-3"
                                style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" role="heading" aria-level="2"
                                data-uw-rm-heading="level">Tugas dan Fungsi</h1>
                            <h6 class="text-center mt-5 mb-5 text-justify"
                                style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" data-uw-rm-heading="level"
                                role="heading" aria-level="3"><strong>Balai Besar Wilayah Sungai Serayu
                                    Opak</strong> mempunyai tugas melaksanakan pengelolaan sumber daya air di wilayah sungai
                                yang
                                meliputi penyusunan program, pelaksanaan konstruksi, operasi dan pemeliharaan dalam rangka
                                konservasi dan pendayagunaan sumber daya air dan pengendalian daya rusak air pada sungai,
                                pantai, bendungan, danau, situ, embung, dan tampungan air lainnya, irigasi, rawa, tambak,
                                air tanah, air baku, serta pengelolaan drainase utama perkotaan</h6>

                        </header>
                    
                        <h6 class="mb-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                            Dalam melaksanakan tugas sebagaimana dimaksud, Balai Besar Wilayah Sungai Serayu Opak
                            menyelenggarakan fungsi:

                            <ul data-aos="fade-up" data-aos-delay="100" style="text-align: justify">
                                <li><i data-feather="chevron-right"></i> Penyusunan program pengelolaan sumber daya air dan
                                    rencana kegiatan pengelolaan sumber daya air pada wilayah sungai;</li>
                                <li><i data-feather="chevron-right"></i> Pemantauan dan evaluasi penyelenggaraan atau
                                    penerapan pola pengelolaan sumber daya air dan rencana pengelolaan sumber daya air;</li>
                                <li><i data-feather="chevron-right"></i> Penyusunan studi kelayakan dan perencanaan teknis
                                    atau desain pengembangan sumber daya air;</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan pengadaan barang dan jasa sesuai dengan
                                    ketentuan peraturan perundang-undangan;</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan sistem manajemen keselamatan dan
                                    kesehatan kerja;</li>
                                <li><i data-feather="chevron-right"></i> Pengelolaan sumber daya air yang meliputi
                                    konservasi sumber daya air, pendayagunaan sumber daya air, dan pengendalian daya rusak
                                    air pada wilayah sungai;</li>
                                <li><i data-feather="chevron-right"></i> Pengelolaan drainase utama perkotaan;</li>
                                <li><i data-feather="chevron-right"></i> Pengelolaan sistem hidrologi;</li>
                                <li><i data-feather="chevron-right"></i> Pengelolaan sistem informasi sumber daya air;</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan operasi dan pemeliharaan sumber daya
                                    air pada wilayah sungai;</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan pemberian bimbingan teknis pengelolaan
                                    sumber daya air yang menjadi kewenangan provinsi dan kabupaten/kota;</li>
                                <li><i data-feather="chevron-right"></i> Penyusunan dan penyiapan rekomendasi teknis dalam
                                    pemberian izin penggunaan sumber daya air pada wilayah sungai;</li>
                                <li><i data-feather="chevron-right"></i> Penyusunan dan penyiapan saran teknis untuk
                                    pengalihan alur sungai dan pemanfaatan bekas sungai;</li>
                                <li><i data-feather="chevron-right"></i> Penyusunan dan pelaksanaan kajian penetapan garis
                                    sempadan sungai, garis sempadan danau, garis sempadan situ, dan garis sempadan jaringan
                                    irigasi;</li>
                                <li><i data-feather="chevron-right"></i> Fasilitasi kegiatan tim koordinasi pengelolaan
                                    sumber daya air pada wilayah sungai;</li>
                                <li><i data-feather="chevron-right"></i> Pemberdayaan masyarakat dalam pengelolaan sumber
                                    daya air;</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan penyusunan laporan akuntansi keuangan
                                    dan akuntansi barang milik negara selaku unit akuntansi wilayah;</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan pemungutan, penerimaan, dan penggunaan
                                    biaya jasa pengelolaan sumber daya air sesuai dengan ketentuan peraturan
                                    perundang-undangan;</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan urusan tata usaha dan rumah tangga
                                    balai serta komunikasi publik;</li>
                                <li><i data-feather="chevron-right"></i> Penyusunan perjanjian kinerja dan laporan kinerja
                                    balai; dan</li>
                                <li><i data-feather="chevron-right"></i> Pelaksanaan pemantauan dan pengawasan penggunaan
                                    sumber daya air dan penyidikan tindak pidana bidang sumber daya air.</li>
                            </ul>
                        </h6>
                        <h1 class="mt-3 mb-3 text-center" style="padding-top: 50px" data-aos="fade-up" data-aos-delay="100">Profil Organisasi</h1>
                        <div class="btn-group d-flex justify-content-center mb-3" data-aos="fade-up" data-aos-delay="100">
                            <button class="btn btn-light" onclick="toggleImage(0)">Bagian Umum dan Tata Usaha</button>
                            <button class="btn btn-light" onclick="toggleImage(1)">Bidang Keterpaduan Pembangunan
                                Infrastruktur Sumber Daya Air</button>
                            <button class="btn btn-light" onclick="toggleImage(2)">Bidang Pelaksanaan Jaringan Sumber
                                Air</button>
                            <button class="btn btn-light" onclick="toggleImage(3)">Bidang Pelaksanaan Jaringan Pemanfaatan
                                Air</button>
                            <button class="btn btn-light" onclick="toggleImage(4)">Bidang Operasi Dan Pemeliharaan</button>
                        </div>

                        <div class="image-container container" data-aos="fade-up" data-aos-delay="100" style="text-align: justify">
                            <ul>
                                <li class="active" data-index="0"><p>Bagian Umum dan Tata Usaha mempunyai tugas melaksanakan
                                    urusan administrasi kepegawaian, organisasi, dan tata laksana, pelaksanaan pembinaan
                                    pegawai, pelaksanaan fasilitasi kegiatan reformasi birokrasi di balai, penyusunan
                                    rencana dan pengelolaan urusan kas dan perbendaharaan, administrasi dan akuntansi
                                    keuangan, administrasi dan fasilitasi penyelesaian laporan hasil pemeriksaan dan
                                    pengaduan masyarakat, pelaksanaan pemungutan, penerimaan dan penggunaan biaya jasa
                                    pengelolaan sumber daya air, pelaksanaan urusan tata usaha, kearsipan, dan rumah tangga,
                                    pelaksanaan komunikasi publik dan hukum, penatausahaan, pengelolaan, administrasi, dan
                                    akuntansi barang milik negara, pengamanan fisik barang milik negara, pengelolaan
                                    kekayaan negara lainnya, koordinasi kegiatan terkait penanganan bencana, serta
                                    koordinasi administrasi penerapan sistem pengendalian intern balai besar.</p></li>
                                <li data-index="1">Bidang Keterpaduan Pembangunan Infrastruktur Sumber Daya Air mempunyai
                                    tugas melaksanakan penyusunan keterpaduan pola, program dan rencana kegiatan pengelolaan
                                    sumber daya air, analisis dan evaluasi kelayakan program dan kegiatan pengelolaan sumber
                                    daya air, analisis dampak lingkungan, penyusunan perjanjian kinerja dan laporan kinerja
                                    Balai, koordinasi dan fasilitasi penerapan sistem manajemen keselamatan dan kesehatan
                                    kerja, fasilitasi pengadaan barang dan jasa, pelaksanaan koordinasi terkait pengadaan
                                    tanah, pelaksanaan pemberdayaan masyarakat di bidang program dan perencanaan umum
                                    pengelolaan sumber daya air, pengelolaan sistem hidrologi serta sistem informasi dan
                                    data sumber daya air, dan pelaksanaan koordinasi terkait pengadaan tanah.</li>
                                <li data-index="2">Bidang Pelaksanaan Jaringan Sumber Air mempunyai tugas penyusunan rencana
                                    kegiatan, penyusunan perencanaan teknik, pengendalian dan pengawasan pelaksanaan
                                    perencanaan teknik bidang sungai, pantai, drainase utama perkotaan, bendungan, danau,
                                    situ, embung, dan tampungan air lainnya, pelaksanaan konstruksi dan non konstruksi,
                                    persiapan penyerahan operasi dan pemeliharaan, fasilitasi penerapan sistem manajemen
                                    keselamatan dan kesehatan kerja, fasilitasi pengadaan barang dan jasa, pelaksanaan
                                    pemberdayaan masyarakat di bidang pelaksanaan jaringan sumber air, serta pelaksanaan
                                    pemberian bimbingan teknis kepada pemerintah daerah provinsi dan pemerintah daerah
                                    kabupaten/kota dalam pelaksanaan konstruksi sarana dan prasarana jaringan sumber air di
                                    bidang sungai, pantai, drainase utama perkotaan, bendungan, danau, situ, embung, dan
                                    tampungan air lainnya, serta pelaksanaan penyusunan saran teknis untuk pengalihan alur
                                    sungai dan pemanfaatan bekas sungai.</li>
                                <li data-index="3">Bidang Pelaksanaan Jaringan Pemanfaatan Air mempunyai tugas melaksanakan
                                    penyusunan rencana kegiatan, penyusunan perencanaan teknik, pengendalian dan pengawasan
                                    pelaksanaan perencanaan teknik bidang irigasi, rawa, dan tambak, air tanah dan air baku,
                                    konservasi tampungan air, air tanah, dan air baku, serta sarana dan prasarana konservasi
                                    air tanah dan air baku, pelaksanaan konstruksi dan non konstruksi, persiapan penyerahan
                                    operasi dan pemeliharaan, fasilitasi penerapan sistem manajemen keselamatan dan
                                    kesehatan kerja, fasilitasi pengadaan barang dan jasa, pelaksanaan pemberdayaan
                                    masyarakat di bidang pelaksanaan jaringan pemanfaatan air, serta pelaksanaan pemberian
                                    bimbingan teknis kepada Pemerintah Daerah provinsi dan Pemerintah Daerah kabupaten/kota
                                    dalam pelaksanaan konstruksi sarana dan prasarana jaringan sumber air di bidang irigasi,
                                    rawa, dan tambak, air tanah dan air baku, konservasi tampungan air, air tanah, dan air
                                    baku, serta sarana dan prasarana konservasi air tanah dan air baku.</li>
                                <li data-index="4">Bidang Operasi dan Pemeliharaan mempunyai tugas melaksanakan penyusunan
                                    rencana kegiatan, pengendalian dan pengawasan pelaksanaan perencanaan teknik, persiapan
                                    pelaksanaan operasi dan pemeliharaan dan pelaksanaan operasi dan pemeliharaan,
                                    fasilitasi penerapan sistem manajemen keselamatan dan kesehatan kerja, fasilitasi
                                    pengadaan barang dan jasa, serta pelaksanaan pemberdayaan masyarakat di bidang operasi
                                    dan pemeliharaan, pelaksanaan penanggulangan kerusakan akibat bencana, pengelolaan
                                    sistem peringatan dini, pelaksanaan penyusunan rencana alokasi air tahunan, pelaksanaan
                                    penyusunan kajian penetapan garis sempadan sungai, garis sempadan danau, garis sempadan
                                    situ dan garis sempadan jaringan irigasi, fasilitasi kegiatan tim koordinasi pengelolaan
                                    sumber daya air pada wilayah sungai, pelaksanaan penyusunan rekomendasi teknis dalam
                                    pemberian izin penggunaan sumber daya air serta penyidikan tindak pidana bidang sumber
                                    daya air.</li>
                            </ul>
                        </div>


                </div>
                </article>
            </div>
        </div>
        </div>
    </section>

    <script>
        function toggleImage(index) {
            var images = document.querySelectorAll('.image-container ul li');
            images.forEach(function(image, i) {
                if (i === index) {
                    image.classList.add('active');
                } else {
                    image.classList.remove('active');
                }
            });

            // Mengubah warna tombol yang aktif
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(function(button, i) {
                if (i === index) {
                    button.classList.add('active-button');
                } else {
                    button.classList.remove('active-button');
                }
            });

            localStorage.setItem('activeImageIndex', index);
        }

        var storedIndex = localStorage.getItem('activeImageIndex');
        if (storedIndex !== null) {
            toggleImage(parseInt(storedIndex));
        }
    </script>
@endsection
