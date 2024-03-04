@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Berita</h5>
            <form method="post" action="/balai/bbwsserayuopak/dashboard/beritas" enctype="multipart/form-data">
                @csrf
                <x-input nama="judul" judul="judul" nilai="" />
                <x-slug judul="judul" nilai="" rute="beritas" />
                <x-ck body="body" nilai="" />
                <x-garis />
                <x-i_img nama="url_foto" judul="Foto Berita" nilai="" />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <x-notif />
@endsection
