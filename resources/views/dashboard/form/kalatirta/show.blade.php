@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Laporan Akuntabilitas Kinerja Instansi Pemerintahan</h5>
                <form method="post" action="/dashboard/kalatirta-so/{{ $data->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <x-input nama="nama" judul="Nama" nilai="{{ $data->nama }}" />
                    <x-input nama="alamat" judul="Nama" nilai="{{ $data->alamat }}" />
                    <x-input nama="nohp" judul="Nama" nilai="{{ $data->nohp }}" />
                    <x-input nama="email" judul="Nama" nilai="{{ $data->email }}" />
                    <x-input nama="pekerjaan" judul="Nama" nilai="{{ $data->pekerjaan }}" />
                    <x-input nama="alamatkantor" judul="Nama" nilai="{{ $data->alamatkantor }}" />
                    <div class="mb-3">
                        <div style="z-index: 999">
                            <textarea id="informasi" name="informasi" style="width: 100px;" hidden>{{ old('informasi', $data->informasi) }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div style="z-index: 999">
                            <textarea id="tujuan" name="tujuan" style="width: 100px;" hidden>{{ old('tujuan', $data->tujuan) }}</textarea>
                        </div>
                    </div>

                    <x-garis />

                    <x-i_img nama="ktp" judul="Foto Berita" nilai="{{ $data->ktp }}" />


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Proses</button>
                        <button type="submit" class="btn btn-primary">Tolak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-notif />


    <script>
        function initializeEditor(selector) {
            ClassicEditor
                .create(document.querySelector(selector), {
                    toolbar: ['redo', '|', 'undo'],
                })
                .catch(error => {
                    console.log(error);
                });
        }

        // Inisialisasi CKEditor untuk textarea pertama
        initializeEditor('#informasi');

        // Inisialisasi CKEditor untuk textarea kedua
        initializeEditor('#tujuan');
    </script>
@endsection
