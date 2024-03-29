@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Pengumuman</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/balai/bbwsserayuopak/dashboard/pengumuman"
                            enctype="multipart/form-data">
                            @csrf

                            {{-- <div class="mb-3">
                            <label for="Pengumuman" class="form-label">Pengumuman</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul"
                                    value="{{ old('judul') }}" required>

                            </div>
                        </div> --}}
                            <x-input nama="judul" judul="Pengumuman" nilai="" />


                            <x-garis />

                            <div class="mt-3 mb-3">
                                <label for="dokumen">File Pengumuman</label>
                                <input type="file" class="form-control" id="dokumen" name="dokumen"
                                    accept="image/*, image/png, image/gif, application/pdf">
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

    {{-- <script>
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
</script> --}}

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
