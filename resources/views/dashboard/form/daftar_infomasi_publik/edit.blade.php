@extends('layout.dashboard.main')
@section('container')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Daftar Informasi Publik</h5>
                <form method="post"
                    action="{{ route('daftar-informasi-publik.update', ['daftar_informasi_publik' => $daftar_informasi_publik->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <x-input nama="nama" judul="Informasi Publik" nilai="{{ $daftar_informasi_publik->nama }}" />
                    <div class="mt-3">
                        <label for="jenis" class="form-label">Informasi Publik</label>
                        <select class="form-select" aria-label="Default select example" name="jenis" id="jenis"
                            required>
                            <option value=""
                                {{ old('jenis', $daftar_informasi_publik->jenis) == '' ? 'selected' : '' }}>Kategori
                                Informasi</option>
                            <option value="serta"
                                {{ old('jenis', $daftar_informasi_publik->jenis) == 'serta' ? 'selected' : '' }}>Serta Merta
                            </option>
                            <option value="setiap-saat"
                                {{ old('jenis', $daftar_informasi_publik->jenis) == 'setiap-saat' ? 'selected' : '' }}>
                                Setiap Saat
                            </option>
                            <option value="berkala"
                                {{ old('jenis', $daftar_informasi_publik->jenis) == 'berkala' ? 'selected' : '' }}>Berkala
                            </option>
                        </select>
                    </div>

                    <x-garis />
                    <x-i_pdf nama="url_file" judul="PDF" nilai="{{ $daftar_informasi_publik->url_file }}" />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const linkInput = document.getElementById('link');
            const fileInput = document.getElementById('url_file');

            linkInput.addEventListener('input', function() {
                if (linkInput.value.trim() !== '') {
                    fileInput.disabled = true;
                } else {
                    fileInput.disabled = false;
                }
            });

            fileInput.addEventListener('input', function() {
                if (fileInput.files.length > 0) {
                    linkInput.disabled = true;
                } else {
                    linkInput.disabled = false;
                }
            });
        });
    </script>
@endsection
