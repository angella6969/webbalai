@extends('layout.dashboard.main')
@section('container')
    <style>
        .card {
            max-width: 100%;
            overflow-x: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 12px rgba(230, 138, 38, 1);
        }

        .line {
            border-top: 1px solid rgba(230, 138, 38, 1);
            margin: 10px 0;
        }
    </style>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Media Informasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/dashboard/media/media-informasi/" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="nama" value="{{ old('nama') }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control " hidden readonly id="slug"
                                        name="slug" placeholder="slug" value="{{ old('slug') }}" required>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="jenis" class="form-label">Jenis Media Informasi</label>
                                <select class="form-select" aria-label="Default select example" name="jenis"
                                    id="jenis">
                                    <option selected value="">Kategori</option>
                                    <option value="Majalah">Majalah</option>
                                    <option value="Leaflet">Leaflet</option>
                                    <option value="Infografis">Infografis</option>
                                </select>
                            </div>
                            <div class="separator">
                                <br>
                                <p class="d-flex justify-content-center">Dokumen Pendukunng</p>
                                {{-- <p class="d-flex justify-content-center">Pilih Salah satu : Link / Dokumen</p> --}}
                                <div class="line"></div>
                            </div>

                            {{-- <div class="mb-3">
                            <label for="Pengumuman" class="form-label">Link</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="url_pengumuman" name="url_pengumuman"
                                    placeholder="link pengumuman  jika ada" value="{{ old('url_pengumuman') }}">

                            </div>
                        </div> --}}



                            <div class="mt-3 mb-3">
                                <label for="url_foto1">File</label>
                                <input type="file" class="form-control" id="url_foto1" name="url_foto1"
                                    accept="image/*, image/png, image/gif">
                                <h6>File Max 5 MB</h6>
                            </div>
                            <div class="mt-3 mb-3">
                                <label for="url_foto2">File</label>
                                <input type="file" class="form-control" id="url_foto2" name="url_foto2"
                                    accept="image/*, image/png, image/gif">
                                <h6>File Max 5 MB</h6>
                            </div>
                            <div class="mt-3 mb-3">
                                <label for="url_foto3">File</label>
                                <input type="file" class="form-control" id="url_foto3" name="url_foto3"
                                    accept="image/*, image/png, image/gif">
                                <h6>File Max 5 MB</h6>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
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
