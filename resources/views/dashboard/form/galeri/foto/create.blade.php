@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Tambah Foto</h5>
                <form method="post" action="dashboard/galeri/foto" enctype="multipart/form-data">
                    @csrf

                    <x-input nama="nama" judul="Nama Album" nilai="" />
                    <x-slug judul="nama" nilai="" rute="media/galeri/fotos" />
                    <x-i_img nama="url_foto1" nilai="" judul="Foto 1" />
                    <x-i_img nama="url_foto2" nilai="" judul="Foto 2" />
                    <x-i_img nama="url_foto3" nilai="" judul="Foto 3" />
                    <x-i_img nama="url_foto4" nilai="" judul="Foto 4" />
                    <x-i_img nama="url_foto5" nilai="" judul="Foto 5" />
                    <x-i_img nama="url_foto6" nilai="" judul="Foto 6" />
                    <x-i_img nama="url_foto7" nilai="" judul="Foto 7" />
                    <x-i_img nama="url_foto8" nilai="" judul="Foto 8" />
                    <x-i_img nama="url_foto9" nilai="" judul="Foto 9" />
                    <x-i_img nama="url_foto10" nilai="" judul="Foto 10" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
@endsection
