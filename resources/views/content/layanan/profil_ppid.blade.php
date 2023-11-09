@extends('layout.content.main')
@section('container')
    <style>
        .paragraf-container {
            white-space: nowrap;
            overflow-x: auto;
        }

        .paragraf-container ul {
            list-style-type: none;
            padding: 0;
        }

        .paragraf-container ul li {
            display: none;
            white-space: normal;
        }

        .paragraf-container ul li.active {
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

        .line {
            border-top: 1px solid rgba(230, 138, 38, 1);
            margin: 10px 0;
        }
    </style>
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">LAYANAN</span>
                    <h1 class="font-weight-bold text-color-light">Profil PPID BBWS SO</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="/">Beranda</a> / <a href=""
                                style="color: black" class="active">Layanan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-height-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">

                        <header class=" mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <h1 class=" mb-3" style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" role="heading"
                                aria-level="2" data-uw-rm-heading="level">Visi dan Misi Pelayanan</h1>
                        </header>

                        <div class="btn-group d-flex justify-content-center mb-3">
                            <button class="btn btn-light" onclick="toggleImage(0)">Visi Pelayanan</button>
                            <button class="btn btn-light" onclick="toggleImage(1)">Misi Pelayanan</button>
                        </div>

                        <div class="paragraf-container container">
                            <ul>
                                <li class="active" data-index="0">
                                    <p style="padding: 10px">“Mewujudkan Pelayanan Informasi Publik Balai Besar Wilayah
                                        Sungai Serayu Opak yang Cepat, Tepat, dan Sederhana.”</p>
                                </li>
                                <li data-index="1">
                                    <ul>
                                        <p style="padding-left: 10px">1. Menyediakan pelayanan informasi publik dengan
                                            sistem penyediaan layanan
                                            informasi secara cepat, mudah, dan wajar sesuai dengan petunjuk teknis
                                            standar layanan Informasi Publik.</p>
                                        <p style="padding-left: 10px">2. Menyediakan sumber daya manusia dan infrastruktur
                                            pelayanan informasi yang
                                            memadai.</p>
                                        <p style="padding-left: 10px">3. Senantiasa melayani pemohon informasi secara
                                            santun, transparan, dan
                                            bertanggung jawab.</p>
                                    </ul>
                                </li>
                        </div>

                        <header class=" mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <div class="line mt-3"></div>
                            <h1 class=" mb-3 d-flex justify-content-center" style="margin-right: 0px; margin-left: 0px;"
                                role="heading" aria-level="2" data-uw-rm-heading="level">Maklumat Pelayanan</h1>
                            <h6>
                                <p class="text-center">”Memberikan pelayanan informasi publik dengan cepat, mudah, dan
                                    sederhana sesuai standar pelayanan informasi publik serta ketentuan yang berlaku secara
                                    transparan dan bertanggungjawab.”</p>
                            </h6>
                            <div class="line"></div>
                        </header>
                        <header class=" mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <div class="line mt-3"></div>
                            <h1 class=" mb-3 d-flex justify-content-center" style="margin-right: 0px; margin-left: 0px;"
                                role="heading" aria-level="2" data-uw-rm-heading="level">Biaya Layanan</h1>
                            <h6>
                                <p class="text-center">Pelayanan informasi publik tidak dipungut biaya. Namun biaya
                                    penggandaan atau perekaman yang timbul ditanggung oleh Pemohon Informasi Publik, kecuali
                                    untuk informasi yang telah ditentukan biaya Penerimaan Negara Bukan Pajak (PNBP).</p>
                            </h6>
                            <div class="line"></div>
                        </header>
                        <header class=" mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <div class="line mt-3"></div>
                            <h1 class=" mb-3 d-flex justify-content-center" style="margin-right: 0px; margin-left: 0px;"
                                role="heading" aria-level="2" data-uw-rm-heading="level">Media Layanan</h1>
                            <h6>
                                <p class="text-center">Proses untuk memenuhi permohonan informasi publik dilakukan setelah
                                    Pemohon Informasi publik memenuhi persyaratan yang telah ditentukan. Adapun jangka waktu
                                    penyelesaian permohonan informasi publik dilaksanakan paling lambat 10 (sepulu) hari
                                    kerja sejak diterimanya permintaan, dan PPID dapat memperpanjang waktu paling lama 7
                                    (tujuh) hari kerja dengan pemberitahuan tertulis.</p>
                            </h6>
                            <div class="line"></div>
                        </header>
                        <header class=" mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <div class="line mt-3"></div>
                            <h1 class=" mb-3 d-flex justify-content-center" style="margin-right: 0px; margin-left: 0px;"
                                role="heading" aria-level="2" data-uw-rm-heading="level">Tugas dan Fungsi PPID</h1>
                            <h6>
                                <tr>
                                    <td><i data-feather="check"></i> Mengkoordinasikan penyusunan Standar Operasional
                                        Prosedur, yang selanjutnya disebut SOP, tentang pengumpulan, pendokumentasian dan
                                        pelayanan informasi publik, serta penanganan penyelesaian sengketa informasi;</td>
                                    <li><i data-feather="check"></i> Mengkoordinasikan penyusunan dan pemutakhiran Daftar
                                        Informasi Publik dan Daftar Informasi yang Dikecualikan;</li>
                                    <li><i data-feather="check"></i> Mengkoordinasikan dan melakukan uji konsekuensi
                                        terhadap informasi yang dikecualikan;</li>
                                    <li><i data-feather="check"></i> Melaksanakan penyediaan, penyimpanan, pendokumentasian
                                        dan pengamanan informasi publik;</li>
                                    <li><i data-feather="check"></i> Merencanakan, mengorganisasikan, melaksanakan,
                                        mengawasi, mengevaluasi pelaksanaan kegiatan pengelolaan dan pelayanan informasi,
                                        serta penyelesaian sengketa informasi publik;</li>
                                    <li><i data-feather="check"></i> Mengembangkan kapasitas kelembagaan dan pejabat
                                        fungsional dan/atau petugas pengelolaan informasi dalam rangka peningkatan kualitas
                                        layanan informasi publik;</li>
                                    <li><i data-feather="check"></i> Menetapkan pertimbangan tertulis atas setiap informasi
                                        publik yang ditutup untuk dapat melindungi kepentingan yang lebih besar daripada
                                        membukanya, atau sebaliknya;</li>
                                </tr>
                            </h6>
                            <div class="line"></div>
                        </header>
                    </article>
                </div>
    </section>

    <script>
        function toggleImage(index) {
            var images = document.querySelectorAll('.paragraf-container ul li');
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
