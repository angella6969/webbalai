@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<<<<<<< HEAD
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Daftar Foto Beranda</h5>
                <form method="post" action="dashboard/foto-beranda" enctype="multipart/form-data">
                    @csrf
                    <x-input nama="nama" judul="Nama" nilai="" />
                    <x-i_img nama="image" judul="Foto Beranda" nilai="" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
=======
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Daftar Foto Beranda</h5>
            <form method="post" action="/dashboard/foto-beranda" enctype="multipart/form-data">
                @csrf
                <x-input nama="nama" judul="Nama" nilai="" />
                <x-i_img nama="image" judul="Foto Beranda" nilai="" />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
>>>>>>> parent of 71e58e0 (awd awdawdwd1)
        </div>
    </div>
    <x-notif />
@endsection
