@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Video Youtube</h5>
                <form method="post" action="/dashboard/galeri/foto/{{ $foto->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <x-input nama="nama" judul="Nama Album" nilai="{{ $foto->nama }}" />
                    {{-- @dd($foto->url_foto1) --}}

                    {{-- <x-slug judul="nama" nilai="" rute="media/galeri/fotos" /> --}}
                    <x-i_img nama="url_foto1" nilai="{{ $foto->url_foto1 }}" judul="Foto 1" />
                    <x-i_img nama="url_foto2" nilai="{{ $foto->url_foto2 }}" judul="Foto 2" />
                    <x-i_img nama="url_foto3" nilai="{{ $foto->url_foto3 }}" judul="Foto 3" />
                    <x-i_img nama="url_foto4" nilai="{{ $foto->url_foto4 }}" judul="Foto 4" />
                    <x-i_img nama="url_foto5" nilai="{{ $foto->url_foto5 }}" judul="Foto 5" />
                    <x-i_img nama="url_foto6" nilai="{{ $foto->url_foto6 }}" judul="Foto 6" />
                    <x-i_img nama="url_foto7" nilai="{{ $foto->url_foto7 }}" judul="Foto 7" />
                    <x-i_img nama="url_foto8" nilai="{{ $foto->url_foto8 }}" judul="Foto 8" />
                    <x-i_img nama="url_foto9" nilai="{{ $foto->url_foto9 }}" judul="Foto 9" />
                    <x-i_img nama="url_foto10" nilai="{{ $foto->url_foto10 }}" judul="Foto 10" />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
@endsection
