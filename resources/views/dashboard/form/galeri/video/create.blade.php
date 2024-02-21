@extends('layout.dashboard.main')
@section('container')
<link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Tambah Video</h5>
            <form method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
                @csrf

                <x-input nama="nama" judul="Nama" nilai="" />
                <x-slug judul="nama" nilai="" rute="media/galeri/videos" />
                <x-input nama="url_yt" judul="Code Embed Youtube" nilai="" />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<x-notif />
@endsection