@extends('layout.content.main')
@section('container')
    {{-- <style>
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

        .btn {
            margin: 5px;
            background-color: rgba(255, 201, 40, 0.8);

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
    </style> --}}
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">PROFIL</span>
                    <h1 class="font-weight-bold text-color-light">Struktur Organisasi</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="balai/bbwsserayuopak/">Beranda</a> / <a href=""
                                style="color: black" class="active">Profil</a></li>
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
                        <header class="blog-post-header mt-3 mb-3">

                        </header>
                        <header data-aos="fade-up" data-aos-delay="100" class="blog-post-header mt-3 mb-3"
                            style="position: relative; overflow: hidden;">
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
                        <h2 data-aos="fade-up" data-aos-delay="100" class="text-center mb-4 mt-4"
                            style="line-height: 1.2; margin-right: 0px; margin-left: 0px;">
                            <strong>Struktur Organisasi
                                Balai Besar Wilayah Sungai Serayu Opak</strong>
                        </h2>

                        {{--  --}}
                        <div class="col-xl-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="nav-align-top mb-4">
                                <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <button type="button" class="btn nav-link active btn-light" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-pills-justified-bbws"
                                            aria-controls="navs-pills-justified-bbws" aria-selected="true">
                                            BBWS
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn nav-link btn-light " role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-pills-justified-balai"
                                            aria-controls="navs-pills-justified-balai" aria-selected="false">
                                            Satker Balai
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn nav-link btn-light " role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-pills-justified-pjsa"
                                            aria-controls="navs-pills-justified-pjsa" aria-selected="false">
                                            PJSA
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn nav-link btn-light " role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-pills-justified-pjpa"
                                            aria-controls="navs-pills-justified-pjpa" aria-selected="false">
                                            PJPA
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn nav-link btn-light " role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-pills-justified-op"
                                            aria-controls="navs-pills-justified-op" aria-selected="false">
                                            Satker OP
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn nav-link btn-light " role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-pills-justified-bendungan"
                                            aria-controls="navs-pills-justified-bendungan" aria-selected="false">
                                            Satker Bendungan
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn nav-link btn-light " role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-pills-justified-tanah"
                                            aria-controls="navs-pills-justified-tanah" aria-selected="false">
                                            Satker Pengadaan Tanah
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="navs-pills-justified-bbws" role="tabpanel"
                                        data-aos="fade-up" data-aos-delay="100">
                                        <img class="img-fluid"
                                            src="{{ asset('images\image\struktur_organisasi\STRUKTUR-ORGANISASI-BBWSSO.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-justified-balai" role="tabpanel">
                                        <img class="img-fluid"
                                            src="{{ asset('images\image\struktur_organisasi\2.-Satker-Balai-2021-2048x1393.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-justified-pjsa" role="tabpanel">
                                        <img class="img-fluid"
                                            src="{{ asset('images\image\struktur_organisasi\3.-SNVT-PJSA-2021-2048x1393.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-justified-pjpa" role="tabpanel">
                                        <img class="img-fluid"
                                            src="{{ asset('images\image\struktur_organisasi\4.-SNVT-PJPA-2021-2048x1393.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-justified-op" role="tabpanel">
                                        <img class="img-fluid"
                                            src="{{ asset('images\image\struktur_organisasi\5.-Satker-OP-2021-2048x1393.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-justified-bendungan" role="tabpanel">
                                        <img class="img-fluid"
                                            src="{{ asset('images\image\struktur_organisasi\6.-Satker-Pembangunan-Bendungan-2021-2048x1393.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-justified-tanah" role="tabpanel">
                                        <img class="img-fluid"
                                            src="{{ asset('images\image\struktur_organisasi\7.-Satker-Pengadaan-Tanah-2021-2048x1393.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
