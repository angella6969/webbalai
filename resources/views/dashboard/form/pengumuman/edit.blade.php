@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Pengumuman</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/balai/bbwsserayuopak/dashboard/pengumuman/{{ $pengumuman->id }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="Pengumuman" class="form-label">Pengumuman</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="judul" value="{{ old('judul', $pengumuman->judul) }}" required>

                                </div>
                            </div>
                            {{-- <div class="separator">
                            <br>
                            <p class="d-flex justify-content-center">Dokumen Pendukunng</p>
                            <p class="d-flex justify-content-center">Pilih Salah satu : Link / Dokumen</p>
                            <div class="line"></div>
                        </div> --}}
                            <x-garis />

                            {{-- <div class="mb-3">
                            <label for="Pengumuman" class="form-label">Link</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="url_pengumuman" name="url_pengumuman"
                                    placeholder="link pengumuman  jika ada" value="{{ old('url_pengumuman') }}">

                            </div>
                        </div> --}}



                            <div class="mt-3 mb-3">
                                <label for="dokumen">File Pengumuman</label>
                                <input type="file" class="form-control" id="dokumen" name="dokumen"
                                    accept="application/pdf">
                                <h6>PDF Max 5 MB</h6>
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
        document.addEventListener('DOMContentLoaded', function() {
            const urlPengumumanInput = document.getElementById('url_pengumuman');
            const dokumenInput = document.getElementById('dokumen');

            urlPengumumanInput.addEventListener('input', function() {
                if (urlPengumumanInput.value.trim() !== '') {
                    dokumenInput.disabled = true;
                } else {
                    dokumenInput.disabled = false;
                }
            });

            dokumenInput.addEventListener('input', function() {
                if (dokumenInput.files.length > 0) {
                    urlPengumumanInput.disabled = true;
                } else {
                    urlPengumumanInput.disabled = false;
                }
            });
        });
    </script>
@endsection
