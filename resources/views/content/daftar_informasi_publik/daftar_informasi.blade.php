@extends('layout.content.main')
@section('container')
    <style>
        .paragraf-container {
            white-space: nowrap;
            overflow-x: auto;
        }

        .paragraf-a {
            font-size: 10px;
        }

        .paragraf-container table {
            list-style-type: none;
            padding: 0;
            display: none;
        }

        .paragraf-container table.active {
            display: block;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
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
            background-color: rgba(53, 71, 119, 0.8);
            color: #fff;
        }

        .btn.active-button {
            background-color: rgba(53, 71, 119, 0.8);
            color: white;
        }
    </style>
    <section
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">Info Publik</span>
                    <h1 class="font-weight-bold text-color-light">Daftar Informasi Publik</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="/">Beranda</a> / <a href=""
                                style="color: black" class="active">Daftar Informasi Publik</a></li>
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
                        <header class="blog-post-header mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <h1 class="font-weight-bold text-color-primary mb-3"
                                style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" role="heading" aria-level="2"
                                data-uw-rm-heading="level">Daftar Informasi Balai Besar Wilayah Sungai Serayu Opak</h1>
                        </header>

                        <div class="btn-group" role="group">
                            <button class="btn btn-light" onclick="toggleImage(0)">Informasi Serta Merta</button>
                            <button class="btn btn-light" onclick="toggleImage(1)">Informasi Setiap Saat</button>
                            <button class="btn btn-light" onclick="toggleImage(2)">Informasi Berkala</button>
                        </div>
                        <div class="container">
                            <div class="paragraf-container">

                                <table class="table table-striped table-responsive active">
                                    <thead>
                                        <tr>
                                            <th colspan="12" class="text-center">
                                                <h1>Informasi Serta Merta</h1>
                                            </th>
                                        </tr>
                                        <th colspan="1">No.</th>
                                        <th colspan="2">Informasi yang wajib tersedia Setiap Saat</th>
                                        <th colspan="2">Tautan</th>
                                        <th></th>
                                    </thead>
                                    <tbody data-index="0">
                                        @foreach ($informasis->where('jenis', 'serta') as $key => $informasi)
                                            <tr>
                                                <td colspan="1">{{ $loop->iteration }}</td>
                                                <td colspan="2">{{ $informasi->nama }}</td>
                                                <td colspan="1">
                                                    <a href="{{ asset('storage/' . substr($informasi->url_file, 7)) }}"
                                                        class="paragraf-a">
                                                        <img src="{{ asset('images/icon/download (1).svg') }}"
                                                            alt="Unduh">
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <table class="table table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th colspan="12" class="text-center">
                                                <h1>Informasi Setiap Saat</h1>
                                            </th>
                                        </tr>
                                        <th colspan="1">No.</th>
                                        <th colspan="2">Informasi yang wajib tersedia Setiap Saat</th>
                                        <th colspan="2">Tautan</th>
                                        <th></th>
                                    </thead>
                                    <tbody data-index="0">
                                        @foreach ($informasis->where('jenis', 'serta') as $key => $informasi)
                                            <tr>
                                                <td colspan="1">{{ $loop->iteration }}</td>
                                                <td colspan="2">{{ $informasi->nama }}</td>
                                                <td colspan="1">
                                                    <a href="{{ asset('storage/' . substr($informasi->url_file, 7)) }}"
                                                        class="paragraf-a">
                                                        <img src="{{ asset('images/icon/download (1).svg') }}"
                                                            alt="Unduh">
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <table class="table table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th colspan="12" class="text-center">
                                                <h1>Informasi Berkala</h1>
                                            </th>
                                        </tr>
                                        <th colspan="1">No.</th>
                                        <th colspan="2">Informasi yang wajib tersedia Setiap Saat</th>
                                        <th colspan="2">Tautan</th>
                                        <th></th>
                                    </thead>
                                    <tbody data-index="0">
                                        @foreach ($informasis->where('jenis', 'serta') as $key => $informasi)
                                            <tr>
                                                <td colspan="1">{{ $loop->iteration }}</td>
                                                <td colspan="2">{{ $informasi->nama }}</td>
                                                <td colspan="1">
                                                    <a href="{{ asset('storage/' . substr($informasi->url_file, 7)) }}"
                                                        class="paragraf-a">
                                                        <img src="{{ asset('images/icon/download (1).svg') }}"
                                                            alt="Unduh">
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <script>
        // function toggleImage(index) {
        //     var tables = document.querySelectorAll('.paragraf-container table');
        //     var tbodyElements = document.querySelectorAll('.paragraf-container tbody');

        //     tables.forEach(function(table, i) {
        //         if (i === index) {
        //             table.classList.add('active');
        //             tbodyElements[i].classList.add('active');
        //             localStorage.setItem('activeImageIndex', index);
        //         } else {
        //             table.classList.remove('active');
        //             tbodyElements[i].classList.remove('active');
        //         }
        //     });
        // }

        // // Check for stored active image index
        // var storedIndex = localStorage.getItem('activeImageIndex');
        // if (storedIndex !== null) {
        //     toggleImage(parseInt(storedIndex));
        // }

        function toggleImage(index) {
            var tables = document.querySelectorAll('.paragraf-container table');
            var tbodyElements = document.querySelectorAll('.paragraf-container tbody');

            tables.forEach(function(table, i) {
                if (i === index) {
                    table.classList.add('active');
                    tbodyElements[i].classList.add('active');
                    localStorage.setItem('activeImageIndex', index);

                    // Mengubah kelas tombol yang aktif
                    var buttons = document.querySelectorAll('.btn');
                    buttons.forEach(function(button, j) {
                        if (j === index) {
                            button.classList.add('active-button');
                        } else {
                            button.classList.remove('active-button');
                        }
                    });
                } else {
                    table.classList.remove('active');
                    tbodyElements[i].classList.remove('active');
                }
            });
        }
    </script>
@endsection
