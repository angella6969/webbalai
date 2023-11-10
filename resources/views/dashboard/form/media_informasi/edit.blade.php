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
            <h5 class="card-title fw-semibold mb-4">Pengumuman</h5>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/dashboard/pengumuman" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="Pengumuman" class="form-label">Pengumuman</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul"
                                    value="{{ old('judul',$pengumuman->judul) }}" required>

                            </div>
                        </div>
                        <div class="separator">
                            <br>
                            <p class="d-flex justify-content-center">Dokumen Pendukunng</p>
                            <p class="d-flex justify-content-center">Pilih Salah satu : Link / Dokumen</p>
                            <div class="line"></div>
                        </div>

                        <div class="mb-3">
                            <label for="Pengumuman" class="form-label">Link</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="url_pengumuman" name="url_pengumuman"
                                    placeholder="link pengumuman  jika ada" value="{{ old('url_pengumuman') }}">

                            </div>
                        </div>



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
<script>
    document.addEventListener('DOMContentLoaded', function() {
            @if (Session::has('success'))
                iziToast.success({
                    title: 'Success',
                    message: '{{ Session::get('success') }}',
                    position: 'topRight',
                });
            @endif
            @if (Session::has('fail'))
                iziToast.warning({
                    title: 'Warning',
                    message: '{{ Session::get('fail') }}',
                    position: 'topRight',
                });
            @endif
        });
</script>
{{-- <script>
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
</script> --}}
<x-notif />

@endsection