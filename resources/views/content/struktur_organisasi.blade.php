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
</style>
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
                    <li><a class="text-color-light" style="color: black" href="/">Beranda</a> / <a href=""
                            style="color: black" class="active">Profil</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section section-height-3" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 order-1 mb-5 mb-md-0">
                <article class="blog-post mb-4">
                    <header class="blog-post-header mt-3 mb-3">

                    </header>
                    <header data-aos="fade-up" data-aos-delay="100" class="blog-post-header mt-3 mb-3" style="position: relative; overflow: hidden;">
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
                    <h2 data-aos="fade-up" data-aos-delay="100" class="text-center mb-4 mt-4" style="line-height: 1.2; margin-right: 0px; margin-left: 0px;">
                        <strong>Struktur Organisasi
                            Balai Besar Wilayah Sungai Serayu Opak</strong>
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="100" class="image-container d-flex justify-content-center mb-3">
                        <button class="btn btn-light" onclick="toggleImage(0)">BBWS</button>
                        <button class="btn btn-light" onclick="toggleImage(1)">Satker Balai 2021</button>
                        <button class="btn btn-light" onclick="toggleImage(2)">PJSA 2021</button>
                        <button class="btn btn-light" onclick="toggleImage(3)">PJPA 2021</button>
                        <button class="btn btn-light" onclick="toggleImage(4)">Satker OP 2021</button>
                        <button class="btn btn-light" onclick="toggleImage(5)">Satker Bendungan 2021</button>
                        <button class="btn btn-light" onclick="toggleImage(6)">Satker Pengadaan Tanah 2021</button>
                    </div>

                    <div class="image-container" data-aos="fade-up" data-aos-delay="100">
                        <img class="image-element background-element" data-index="0"  
                            src="{{ asset('images\image\struktur_organisasi\STRUKTUR-ORGANISASI-BBWSSO.jpg') }}" alt="">
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

        var storedIndex = localStorage.getItem('activeImageIndex');
        if (storedIndex !== null) {
            toggleImage(parseInt(storedIndex));
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

            // Mengubah warna tombol yang aktif
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(function(button, i) {
                if (i == index) {
                    button.classList.add('active-button');
                } else {
                    button.classList.remove('active-button');
                }
            });
        }

        var storedIndex = localStorage.getItem('activeImageIndex');
        if (storedIndex !== null) {
            toggleImage(parseInt(storedIndex));
        }
</script>
@endsection