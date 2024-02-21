@extends('layout.dashboard.main')
@section('container')
<link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Infrastruktur Bendung</h5>
            <form method="post" action="{{ route('sejarah.store') }}" enctype="multipart/form-data">
                @csrf

                <x-input nama="nama" judul="Nama" nilai="" />
                <x-slug judul="nama" nilai="" rute="infrastruktur/bendungs" />
 
                <x-input nama="lokasi" judul="Lokasi" nilai="" />
                <x-input nama="tahun_pembangunan" judul="tahun_mulai_pembangunan " nilai="" />

                <x-ck body="body" nilai="" />

                <x-garis />

                <x-i_img nama="url_foto1" judul="Foto Berita" nilai="" img="Foto1" />
                {{-- <x-i_img nama="url_foto2" judul="Foto Berita" nilai="" img="Foto2" />
                <x-i_img nama="url_foto3" judul="Foto Berita" nilai="" img="Foto3" />
                <x-i_img nama="url_foto4" judul="Foto Berita" nilai="" img="Foto4" /> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<x-notif />

@endsection