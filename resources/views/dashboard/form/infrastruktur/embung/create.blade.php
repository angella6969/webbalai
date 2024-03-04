@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Infrastruktur Embung</h5>
                <form method="post" action="/balai/bbwsserayuopak/dashboard/infrastruktur/embungs"
                    enctype="multipart/form-data">
                    @csrf

                    <x-input nama="nama" judul="Nama" nilai="" />
                    <x-slug judul="nama" nilai="" rute="infrastruktur/embungs" />

                    <x-input nama="lokasi" judul="Lokasi" nilai="" />
                    <x-input nama="volume_tampung" judul="volume_tampung" nilai="" />
                    <x-input nama="luas_genangan" judul="luas_genangan " nilai="" />
                    <x-input nama="tahun_pembangunan" judul="tahun_pembangunan " nilai="" />

                    <x-ck body="body" nilai="" />

                    <x-garis />

                    <x-i_img nama="url_foto1" judul="Foto Infrastruktur" nilai="" img="Foto1" />
                    <x-i_img nama="url_foto2" judul="Foto Infrastruktur" nilai="" img="Foto2" />
                    <x-i_img nama="url_foto3" judul="Foto Infrastruktur" nilai="" img="Foto3" />
                    <x-i_img nama="url_foto4" judul="Foto Infrastruktur" nilai="" img="Foto4" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <x-notif />
    <script>
        const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/dashboard/infrastruktur/bendungans/checkSlug?nama=' + nama.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
