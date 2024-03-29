@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Laporan Akuntabilitas Kinerja Instansi Pemerintahan</h5>
                <form method="post" action="/balai/bbwsserayuopak/dashboard/kinerja/lakip" enctype="multipart/form-data">
                    @csrf

                    <x-input nama="nama" judul="Nama" nilai="" />
                    <x-garis />

                    <x-I_pdf nama="url_pdf" judul="File Pdf" nilai="" />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
@endsection
