@extends('layout.dashboard.main')
@section('container')
<link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Video Youtube</h5>
            <form method="post" action="{{ route('video.update', ['video' => $video->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-input nama="nama" judul="Nama" nilai="{{ $video->nama }}" />
                <x-slug judul="nama" nilai="{{ $video->slug }}" rute="media/galeri/videos"/>
                <x-input nama="url_yt" judul="Code embed Youtube" nilai="{{ $video->url_yt }}" />


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<x-notif />
@endsection