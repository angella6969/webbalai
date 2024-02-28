@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Edit Foto Beranda</h5>
<<<<<<< HEAD
                <form method="post" action="dashboard/foto-beranda/{{ $image->id }}" enctype="multipart/form-data">
=======
                <form method="post" action="/dashboard/foto-beranda/{{ $image->id }}" enctype="multipart/form-data">
>>>>>>> parent of 71e58e0 (awd awdawdwd1)
                    @csrf
                    @method('PUT')
                    <x-input nama="nama" judul="Nama" nilai="{{ $image->nama }}" />
                    <x-i_img nama="image" judul="Foto Beranda" nilai="{{ $image->image }}" />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <x-notif />
@endsection
