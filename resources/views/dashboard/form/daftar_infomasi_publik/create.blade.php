@extends('layout.dashboard.main')
@section('container')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Daftar Informasi Publik</h5>
                <form method="post" action="/balai/bbwsserayuopak/dashboard/daftar-informasi-publik" enctype="multipart/form-data">
                    @csrf
                    <x-input nama="nama" judul="Judul Informasi Publik" nilai="" />
                    <div class="mt-3">
                        <label for="jenis" class="form-label">Klasifikasi Informasi Publik</label>
                        <select class="form-select" aria-label="Default select example" name="jenis" id="jenis"
                            required>
                            <option value="" {{ old('jenis') == '' ? 'selected' : '' }}></option>
                            <option value="serta" {{ old('jenis') == 'serta' ? 'selected' : '' }}>Serta Merta</option>
                            <option value="setiap-saat" {{ old('jenis') == 'setiap-saat' ? 'selected' : '' }}>Setiap Saat
                            </option>
                            <option value="berkala" {{ old('jenis') == 'berkala' ? 'selected' : '' }}>Berkala</option>
                        </select>
                    </div>

                    <x-garis />

                    {{-- <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="link" name="link" placeholder="link jika ada"
                            value="{{ old('link') }}">

                    </div>
                </div> --}}

                    <div class="mt-3 mb-3">
                        <label for="url_file">PDF</label>
                        <input type="file" class="form-control" id="url_file" name="url_file"
                            accept=".pdf, .xls, .xlsx, .jpg, .jpeg, .png">
                        <h6>PDF Max 5 MB</h6>
                    </div>
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
