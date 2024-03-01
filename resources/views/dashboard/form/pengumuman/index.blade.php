@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">


    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Pengumumans</h5>
                <form action="/balai/bbwsserayuopak/dashboard/pengumuman">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control " placeholder="Pencarian Berdasarkan Judul"
                                    name="search" value="{{ request('search') }}">
                                <button class="btn btn-primary " type="submit" id="basic-addon2"><span
                                        data-feather="search"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="mt-2 mb-2">
                    <a href="/balai/bbwsserayuopak/dashboard/pengumuman/create" class="btn btn-info">Tambah Data</a>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">No</th>
                                <th scope="col">Judul </th>
                                {{-- <th scope="col">Url</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengumumans as $pengumuman)
                                <tr style="text-align: center;">
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $pengumuman->judul }}</td>
                                    {{-- <td> {{ $pengumuman->url_pengumuman }}</td> --}}

                                    <td>
                                        <button class="btn badge bg-info show-DI-modal" data-id="{{ $pengumuman->id }}"
                                            data-judul="{{ $pengumuman->judul }}"
                                            data-url_pengumuman="{{ $pengumuman->url_pengumuman }}">
                                            <span data-feather="eye"></span>
                                        </button>
                                        <a href="/balai/bbwsserayuopak/dashboard/pengumuman/{{ $pengumuman->id }}/edit"
                                            class="bg badge bg-warning"><span data-feather="edit">
                                            </span></a>

                                        <form action="/balai/bbwsserayuopak/dashboard/pengumuman/{{ $pengumuman->id }}"
                                            class="d-inline " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn badge bg-danger show-DI-modal "
                                                onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $pengumuman->judul }}')"><span
                                                    data-feather="file-minus"></span> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="progresModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="progresModalBody">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script> --}}

    <script>
        $(document).ready(function() {
            // Ketika tombol "Tampilkan Data" di klik
            $('.show-DI-modal').on('click', function() {
                // Ambil data dari atribut data
                var id = $(this).data('id');
                var url_pengumuman = $(this).data('url_pengumuman');
                // var Kabupaten = $(this).data('kabupaten');
                // var Kecamatan = $(this).data('kecamatan');
                // var Desa = $(this).data('desa');
                // var names = $(this).data('names');
                // var terbangun = $(this).data('terbangun');
                // var belum_terbangun = $(this).data('belum_terbangun');
                // var irigasiDesaBelumTerbangun = $(this).data('IrigasiDesaBelumTerbangun');
                // var pola = $(this).data('pola');
                // var jenis = $(this).data('jenis');
                // var mendapatkan = $(this).data('mendapatkan');
                // var tahun = $(this).data('tahun');
                // var peta_pdf = $(this).data('peta_pdf');
                // var jaringan_pdf = $(this).data('jaringan_pdf');
                // var dokumentasi_pdf = $(this).data('dokumentasi_pdf');
                // // Tampilkan data dalam modal dengan tabel horizontal
                // var originalString = peta_pdf;
                // var trimmedString = originalString.substring(6);
                // console.log(trimmedString);

                $('#progresModalBody').html(`
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>${id}</td>
                        </tr>
                        <tr>
                            <th>Judul</th>
                            <td>${url_pengumuman}</td>
                        </tr>
                    </table>
                `);

                // Tampilkan modal
                $('#progresModal').modal('show');
            });
        });
    </script>
   
    <x-notif />
@endsection
